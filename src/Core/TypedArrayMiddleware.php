<?php

namespace CasafariSDK\Core;

use JsonMapper\Exception\BuilderException;
use JsonMapper\JsonMapperInterface;
use JsonMapper\Middleware\AbstractMiddleware;
use JsonMapper\ValueObjects\PropertyMap;
use JsonMapper\Wrapper\ObjectWrapper;
use MyCLabs\Enum\Enum;
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
                if (!empty($value)) {
                    $Object->{$property} = new $type();
                    $expected_type = $Object->{$property}->getExpectedType();

                    foreach ($value as $item) {
                        if (enum_exists($expected_type)) {
                            $Object->{$property}->append($expected_type::from($item));
                        } else if (class_exists($expected_type)) {
                            $Object->{$property}->append($mapper->mapToClass($item, $expected_type));
                        } else {
                            $Object->{$property}->append($item);
                        }
                    }
                }
            } else if (enum_exists($type)) {
                /* @var Enum $type */
                $Object->{$property} = $type::from($value);
            } else if (class_exists($type)) {
                $Object->{$property} = $mapper->mapToClass($value, $type);
            } else {
                $Object->{$property} = $value;
            }
        }
    }
}