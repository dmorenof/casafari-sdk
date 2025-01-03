<?php

namespace CasafariSDK\Core;

use JsonSerializable;
use Stringable;

class Entity implements JsonSerializable, Stringable
{
    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return json_encode($this);
    }
}