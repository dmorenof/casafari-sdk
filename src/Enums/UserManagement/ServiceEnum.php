<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\UserManagement;

enum ServiceEnum: string
{
    case AlertsApi = 'alerts-api';
    case Api = 'api';
    case ApplicationService = 'application-service';
    case CadastreApi = 'cadastre-api';
    case ConfigTemplateCreatorAiApi = 'config-template-creator-ai-api';
    case FrenchEnergyCertificationApi = 'french-energy-certification-api';
    case MarketAnalyticsApi = 'market-analytics-api';
    case PoiPlacesApi = 'poi-places-api';
    case PropertiesApi = 'properties-api';
    case TransactionalData = 'transactional-data';
    case TransactionalDataApi = 'transactional-data-api';
}
