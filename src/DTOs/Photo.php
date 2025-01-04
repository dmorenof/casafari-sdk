<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

/**
 * Casafari Photo object
 * <code>
 * {
 *     "Url": "string",
 *     "Category": "string",
 *     "Description": "string",
 *     "SortOrder": 0
 * }
 * </code>
 */
class Photo extends DTO
{
    public string $Url;
    public string $Category;
    public string $Description;
    public int $SortOrder;
}