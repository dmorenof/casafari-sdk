<?php

namespace CasafariSDK\Enums;

/**
 * Represents a set of predefined typology identifiers.
 *
 * This enum defines various typology IDs related to a classification
 * system, including options ranging from "NotApplicable" to "T6andMore".
 * Each case corresponds to a specific string value.
 */
enum TypologyIdEnum: string
{
    case NotApplicable = "NotApplicable";
    case T0 = "T0";
    case T1 = "T1";
    case T2 = "T2";
    case T3 = "T3";
    case T4 = "T4";
    case T5 = "T5";
    case T6andMore = "T6andMore";
}
