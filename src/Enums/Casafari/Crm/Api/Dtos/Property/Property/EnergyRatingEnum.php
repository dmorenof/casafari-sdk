<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property;

enum EnergyRatingEnum: string
{
    case A = 'A';
    case APlus = 'APlus';
    case B = 'B';
    case BMinus = 'BMinus';
    case C = 'C';
    case D = 'D';
    case E = 'E';
    case Exempt = 'Exempt';
    case F = 'F';
    case G = 'G';
    case InProgress = 'InProgress';
}
