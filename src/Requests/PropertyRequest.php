<?php

namespace CasafariSDK\Requests;

use CasafariSDK\Core\Request;
use CasafariSDK\TypedArrays\PropertiesArray;

class PropertyRequest extends Request
{
    public PropertiesArray $Properties;
}