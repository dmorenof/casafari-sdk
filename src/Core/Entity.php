<?php

namespace CasafariSDK\Core;

use BackedEnum;
use JsonSerializable;
use ReflectionClass;
use ReflectionException;
use Stringable;

class Entity implements JsonSerializable, Stringable
{
    /**
     * @throws ReflectionException
     */
    public function __construct(?object $json = null)
    {
        if (is_null($json)) {
            return;
        }

        $ReflectionClass = new ReflectionClass($this);
        $object_vars = get_object_vars($json);

        foreach ($object_vars as $property => $value) {
            $type = $ReflectionClass->getProperty($property)->getType()->__toString();

            if (is_subclass_of($type, TypedArray::class)) {
                $this->{$property} = new $type();
                $expected_type = $this->{$property}->getExpectedType();

                foreach ($value as $item) {
                    if (enum_exists($expected_type)) {
                        /* @var BackedEnum $expected_type */
                        $this->{$property}->append($expected_type::from($item));
                    } else if (class_exists($expected_type)) {
                        $this->{$property}->append(new $expected_type($item));
                    } else {
                        $this->{$property}->append($item);
                    }
                }
            } else if (enum_exists($type)) {
                /* @var BackedEnum $type */
                $this->{$property} = $type::from($value);
            } else if (class_exists($type)) {
                $this->{$property} = new $type($value);
            } else {
                $this->{$property} = $value;
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return json_encode($this);
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}