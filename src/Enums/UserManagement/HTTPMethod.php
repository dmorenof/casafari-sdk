<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\UserManagement;

enum HTTPMethod: string
{
    case DELETE = 'DELETE';
    case GET = 'GET';
    case HEAD = 'HEAD';
    case OPTIONS = 'OPTIONS';
    case PATCH = 'PATCH';
    case POST = 'POST';
    case PUT = 'PUT';
}
