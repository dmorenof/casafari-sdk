<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */
namespace CasafariSDK\Entities;

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
class File
{
    public string $Filename;
    public string $Category;
    public int $SortOrder;
}