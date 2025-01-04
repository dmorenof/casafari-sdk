<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

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
class File extends DTO
{
    public string $Filename;
    public string $Category;
    public int $SortOrder;
}