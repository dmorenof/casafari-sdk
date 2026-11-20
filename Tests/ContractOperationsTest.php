<?php
declare(strict_types=1);

namespace CasafariSDK\Tests;

use PHPUnit\Framework\TestCase;

/** The SDK has exactly the operations of the contract (contract/openapi.json, Casafari's published specification). */
final class ContractOperationsTest extends TestCase
{
    private const array METHODS = ['get', 'put', 'post', 'delete', 'patch', 'head', 'options'];

    /** @return array<string, string> "METHOD path" => operationId, as the contract declares them. */
    private static function declared(): array
    {
        $contract = json_decode((string) file_get_contents(__DIR__ . '/../contract/openapi.json'), true, 512, JSON_THROW_ON_ERROR);
        $declared = [];
        foreach ($contract['paths'] as $path => $item) {
            foreach ($item as $method => $operation) {
                if (in_array($method, self::METHODS, true)) {
                    $declared[strtoupper($method) . ' ' . $path] = $operation['operationId'];
                }
            }
        }
        ksort($declared);
        return $declared;
    }

    /** @return list<string> The source of every file under src/ with the given suffix of path. */
    private static function sources(string $directory): array
    {
        $sources = [];
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__DIR__ . '/../src/' . $directory, \FilesystemIterator::SKIP_DOTS));
        foreach ($files as $file) {
            $sources[] = (string) file_get_contents($file->getPathname());
        }
        return $sources;
    }

    public function testTheContractIsTheCurrentCasafariApi(): void
    {
        self::assertCount(46, self::declared());
    }

    public function testEveryOperationOfTheContractHasItsResourceAndNoOtherExists(): void
    {
        $resources = [];
        foreach (self::sources('Resources') as $source) {
            preg_match_all("/'method' => '([A-Z]+)',\s+'path' => '([^']+)'/", $source, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $resources[] = $match[1] . ' ' . $match[2];
            }
        }
        sort($resources);
        self::assertSame(array_keys(self::declared()), $resources);
    }

    public function testEveryOperationHasItsStaticFacadeNamedByItsOperationId(): void
    {
        $facades = implode("\n", self::sources('.'));
        foreach (self::declared() as $operation => $operationId) {
            self::assertStringContainsString("/** $operation [operationId: $operationId] */", $facades, $operation);
        }
    }
}
