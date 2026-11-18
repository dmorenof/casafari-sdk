<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api;

final class CodeTable extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'rq.correlationId' => 'rqCorrelationId',
        'rq.echoToken' => 'rqEchoToken',
        'rq.includeBusinessTypes' => 'rqIncludeBusinessTypes',
        'rq.includePropertyTypes' => 'rqIncludePropertyTypes',
        'rq.includeZones' => 'rqIncludeZones',
        'rq.lang' => 'rqLang',
        'rq.primaryLangId' => 'rqPrimaryLangId',
        'rq.retransmissionIndicator' => 'rqRetransmissionIndicator',
        'rq.timeStamp' => 'rqTimeStamp',
        'rq.version' => 'rqVersion',
    ],
    'header' => [],
];

    protected const array PROPERTY_MAP = [
    'rq.correlationId' => 'rqCorrelationId',
    'rq.echoToken' => 'rqEchoToken',
    'rq.includeBusinessTypes' => 'rqIncludeBusinessTypes',
    'rq.includePropertyTypes' => 'rqIncludePropertyTypes',
    'rq.includeZones' => 'rqIncludeZones',
    'rq.lang' => 'rqLang',
    'rq.primaryLangId' => 'rqPrimaryLangId',
    'rq.retransmissionIndicator' => 'rqRetransmissionIndicator',
    'rq.timeStamp' => 'rqTimeStamp',
    'rq.version' => 'rqVersion',
];
    protected const array WIRE_PROPERTY_MAP = [
    'rqCorrelationId' => 'rq.correlationId',
    'rqEchoToken' => 'rq.echoToken',
    'rqIncludeBusinessTypes' => 'rq.includeBusinessTypes',
    'rqIncludePropertyTypes' => 'rq.includePropertyTypes',
    'rqIncludeZones' => 'rq.includeZones',
    'rqLang' => 'rq.lang',
    'rqPrimaryLangId' => 'rq.primaryLangId',
    'rqRetransmissionIndicator' => 'rq.retransmissionIndicator',
    'rqTimeStamp' => 'rq.timeStamp',
    'rqVersion' => 'rq.version',
];

    protected const array VALIDATION = [
    'rqLang' => [
        'format' => 'int32',
    ],
    'rqPrimaryLangId' => [
        'format' => 'int32',
    ],
];

    public ?string $rqCorrelationId;
    public ?string $rqEchoToken;
    public ?bool $rqIncludeBusinessTypes;
    public ?bool $rqIncludePropertyTypes;
    public ?bool $rqIncludeZones;
    public ?int $rqLang;
    public ?int $rqPrimaryLangId;
    public ?bool $rqRetransmissionIndicator;
    public ?string $rqTimeStamp;
    public ?float $rqVersion;
}
