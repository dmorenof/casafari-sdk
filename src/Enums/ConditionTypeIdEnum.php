<?php

namespace CasafariSDK\Enums;

/**
 * Represents a set of predefined condition types as string-based enum cases.
 *
 * This enum is commonly used to describe the condition or state of an entity,
 * such as a property or item, and includes a variety of conditions ranging
 * from "New" to "Ruin", covering transitional states like "NeedsRenovation"
 * and "PartlyRenovated", as well as statuses like "OccupiedByOwner" and
 * "PropertyBeingRented".
 */
enum ConditionTypeIdEnum: string
{
    case New = "New";
    case Used = "Used";
    case UnderConstruction = "UnderConstruction";
    case NotApplicable = "NotApplicable";
    case SemiNew = "SemiNew";
    case Project = "Project";
    case NeedsRenovation = "NeedsRenovation";
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
