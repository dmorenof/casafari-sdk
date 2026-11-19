<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\FilterRq\ConditionTypeIdsItem;

enum TypeIdsEnum: string
{
    case InExcellentCondition = 'InExcellentCondition';
    case InGoodCondition = 'InGoodCondition';
    case LuxuryFinishings = 'LuxuryFinishings';
    case NeedsRenovation = 'NeedsRenovation';
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
    case SemiNew = 'SemiNew';
    case UnderConstruction = 'UnderConstruction';
    case Used = 'Used';
}
