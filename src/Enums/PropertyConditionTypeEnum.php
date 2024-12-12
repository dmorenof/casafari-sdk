<?php

namespace CasafariSDK\Enums;

/**
 * Enum for Property->condition_type
 */
enum PropertyConditionTypeEnum: string
{
    case New = "New";
    case Used = "Used";
    case UnderConstruction = "UnderConstruction";
    case NotApplicable = "NotApplicable";
    case VeryGood = "VeryGood";
    case Project = "Project";
    case ToRefurbish = "ToRefurbish";
    case Renovated = "Renovated";
    case PartlyRenovated = "PartlyRenovated";
    case InGoodCondition = "InGoodCondition";
    case InExcellentCondition = "InExcellentCondition";
    case Ruin = "Ruin";
    case NotOccupied = "NotOccupied";
    case OccupiedByOwner = "OccupiedByOwner";
    case PropertyBeingRented = "PropertyBeingRented";
    case Refurbished = "Refurbished";
    case LuxuryFinishings = "LuxuryFinishings";
    case NewBuild = "NewBuild";
}