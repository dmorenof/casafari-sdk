<?php

namespace CasafariSDK\Core;

use Stringable;

/**
 * Represents a strongly typed array that validates its elements against a specified type.
 * Extends \TypedArray\TypedArray and implements Stringable for string representation.
 */
class TypedArray extends \TypedArray\TypedArray implements Stringable
{
    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return json_encode((array)$this);
    }

    /**
     * @return string
     */
    public function getExpectedType(): string
    {
        return $this->expected_type;
    }
}