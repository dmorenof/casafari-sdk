<?php

namespace CasafariSDK\Core;

use BackedEnum;
use InvalidArgumentException;
use JsonSerializable;
use ReflectionClass;
use ReflectionException;
use Stringable;

/**
 * Base Data Transfer Object (DTO) class that provides functionality for
 * object instantiation from JSON-like objects, serialization to JSON,
 * and string conversion through implementation of JsonSerializable
 * and Stringable interfaces.
 *
 * The constructor supports recursive and type-safe object mapping,
 * including support for enums and typed arrays.
 *
 * Methods:
 * - __construct: Initializes the DTO object, optionally populating it with data from a given JSON-like object.
 * - __toString: Converts the DTO object to a JSON-encoded string representation.
 * - jsonSerialize: Prepares the DTO object for JSON serialization.
 */
class DTO implements JsonSerializable, Stringable
{
    /**
     * Constructs a new instance of the class, optionally initializing it with data
     * from a provided JSON-like object by mapping its properties to the class's
     * properties.
     *
     * @param object|null $json Optional JSON-like object whose properties will be used
     *                           to initialize the class instance.
     * @return void
     * @throws InvalidArgumentException
     */
    public function __construct(?object $json = null)
    {
        if (is_null($json)) {
            return;
        }

        $ReflectionClass = new ReflectionClass($this);
        $object_vars = get_object_vars($json);

        foreach ($object_vars as $property => $value) {
            try {
                $ReflectionProperty = $ReflectionClass->getProperty($property);
            } catch (ReflectionException) {
                throw new InvalidArgumentException("Property '$property' does not exist in class '{$ReflectionClass->getName()}'.");
            }

            $type = $ReflectionProperty->getType()->__toString();

            if (is_subclass_of($type, TypedArray::class)) {
                $this->{$property} = $TypedArrayClass = new $type();
                $expected_type = $TypedArrayClass->getExpectedType();

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
                if (!is_object($value)) {
                    throw new InvalidArgumentException("Property {$ReflectionClass->getName()}::$property of type $type cannot be instantiated from " . gettype($value) . ".");
                }

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