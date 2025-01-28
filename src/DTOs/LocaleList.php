<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
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
class LocaleList extends DTO
{
    public PropertyButtonsArray $labels;
    public string $title;
    public string $description;
    public string $short;
    public string $seokeywords;
    public string $seodescription;
    public string $language;
}