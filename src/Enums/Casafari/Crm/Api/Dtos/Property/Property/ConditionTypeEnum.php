<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property;

enum ConditionTypeEnum: string
{
    case InExcellentCondition = 'InExcellentCondition';
    case InGoodCondition = 'InGoodCondition';
    case LuxuryFinishings = 'LuxuryFinishings';
    case New_ = 'New';
    case NewBuild = 'NewBuild';
    case NotApplicable = 'NotApplicable';
    case NotOccupied = 'NotOccupied';
    case OccupiedByOwner = 'OccupiedByOwner';
    case PartlyRenovated = 'PartlyRenovated';
    case Project = 'Project';
    case PropertyBeingRented = 'PropertyBeingRented';
    case Refurbished = 'Refurbished';
    case Renovated = 'Renovated';
    case Ruin = 'Ruin';
    case ToRefurbish = 'ToRefurbish';
    case UnderConstruction = 'UnderConstruction';
    case Used = 'Used';
    case VeryGood = 'VeryGood';
}
