<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

use CasafariSDK\Core\Entity;

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
class Photo extends Entity
{
    public string $Url;
    public string $Category;
    public string $Description;
    public int $SortOrder;
}