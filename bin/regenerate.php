#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * Regenerates src/ from contract/v1.json with sdk-generator, or with --check verifies that src/ is exactly
 * what the contract produces. The generator's own composer.json output is not used: this repository keeps its own.
 */
require __DIR__ . '/../vendor/autoload.php';

use Dmorenof\SdkGenerator\Generation\PhpExecutableEmitter;
use Dmorenof\SdkGenerator\Parsing\SpecificationNormalizer;

$root = dirname(__DIR__);
$check = in_array('--check', $argv, true);
$contract = (new SpecificationNormalizer(validateFormats: true))->fromJson(
    (string) file_get_contents($root . '/contract/v1.json'),
    strict: true,
);
$generated = [];
foreach ((new PhpExecutableEmitter('CasafariSDK', 'dmorenof/casafari-sdk'))->emit($contract) as $path => $content) {
    if (str_starts_with($path, 'src/')) {
        $generated[$path] = $content;
    }
}

$existing = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/src', FilesystemIterator::SKIP_DOTS));
foreach ($iterator as $file) {
    $existing['src/' . substr($file->getPathname(), strlen($root . '/src/'))] = (string) file_get_contents($file->getPathname());
}

if ($check) {
    $stale = array_keys(array_diff_assoc($generated, $existing) + array_diff_key($existing, $generated));
    if ($stale !== []) {
        fwrite(STDERR, "src/ does not match contract/v1.json. Run `composer regenerate`. First differences:\n  " . implode("\n  ", array_slice($stale, 0, 10)) . "\n");
        exit(1);
    }
    echo count($generated), " files match the contract.\n";
    exit(0);
}

foreach (array_keys($existing) as $path) {
    unlink($root . '/' . $path);
}
foreach ($generated as $path => $content) {
    @mkdir(dirname($root . '/' . $path), 0777, true);
    file_put_contents($root . '/' . $path, $content);
}
echo 'Wrote ', count($generated), " files to src/.\n";
