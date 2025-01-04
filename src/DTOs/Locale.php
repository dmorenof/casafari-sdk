<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

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
class Locale extends DTO
{
    public string $title;
    public string $description;
    public string $short;
    public string $seokeywords;
    public string $seodescription;
    public string $language;
}