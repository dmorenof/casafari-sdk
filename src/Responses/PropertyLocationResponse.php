<?php

namespace CasafariSDK\Responses;

use CasafariSDK\Core\Response;
use CasafariSDK\TypedArrays\LocationHierarchyElementsArray;

class PropertyLocationResponse extends Response
{
    public LocationHierarchyElementsArray $Locations;
}