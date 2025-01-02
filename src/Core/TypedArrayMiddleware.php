<?php

namespace CasafariSDK\Core;

use JsonMapper\Exception\BuilderException;
use JsonMapper\JsonMapperFactory;
use JsonMapper\JsonMapperInterface;
use JsonMapper\Middleware\AbstractMiddleware;
use JsonMapper\ValueObjects\PropertyMap;
use JsonMapper\Wrapper\ObjectWrapper;
use ReflectionClass;
use ReflectionException;
use stdClass;

class TypedArrayMiddleware extends AbstractMiddleware
{
    /**
     * @throws ReflectionException
     * @throws BuilderException
     */
    public function handle(
        stdClass            $json,
        ObjectWrapper       $object,
        PropertyMap         $propertyMap,
        JsonMapperInterface $mapper
    ): void
    {
        $Object = $object->getObject();
        $ReflectionClass = new ReflectionClass($Object);
        $object_vars = get_object_vars($json);

        foreach ($object_vars as $property => $value) {
            $type = $ReflectionClass->getProperty($property)->getType()->__toString();

            if (is_array($value) && is_subclass_of($type, TypedArray::class)) {
                foreach ($value as $item) {
                    if (!isset($Object->{$property})) {
                        $Object->{$property} = new $type();
                    }

                    $expected_type = $Object->{$property}->getExpectedType();

                    $mapper = (new JsonMapperFactory())->bestFit();
                    $mapper->unshift(new TypedArrayMiddleware());
                    $ObjectValue = $mapper->mapToClass($item, $expected_type);
                    $Object->{$property}->append($ObjectValue);
                }
            }
        }
    }
}