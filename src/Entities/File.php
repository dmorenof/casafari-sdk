<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

use CasafariSDK\Core\Entity;

/**
 * Casafari File object
 * <code>
 * {
 *     "Filename": "string",
 *     "Category": "string",
 *     "SortOrder": 0
 * }
 * </code>
 */
class File extends Entity
{
    public string $Filename;
    public string $Category;
    public int $SortOrder;
}