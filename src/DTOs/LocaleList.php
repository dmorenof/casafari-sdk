<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\TypedArrays\PropertyButtonsArray;

/**
 * Casafari Locale object
 * <code>
 * {
 *     "title": "string",
 *     "description": "string",
 *     "short": "string",
 *     "seokeywords": "string",
 *     "seodescription": "string",
 *     "language": "pt"
 * }
 * </code>
 */
class LocaleList extends Locale
{
    public PropertyButtonsArray $labels;
}