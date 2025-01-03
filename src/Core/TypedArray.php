<?php

namespace CasafariSDK\Core;

use Stringable;

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