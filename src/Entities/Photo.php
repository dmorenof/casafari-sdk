<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */
namespace CasafariSDK\Entities;
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
class Photo
{
    public string $Url;
    public string $Category;
    public string $Description;
    public int $SortOrder;
}