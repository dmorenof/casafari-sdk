# Casafari SDK Usage Guide

This guide provides an overview of how to use the Casafari SDK to interact with property and location data via its API.
It covers installation, setup, key features, middleware usage, error handling, and helpful examples to demonstrate the
SDK's functionality.

---

## Table of Contents

1. [Installation](#installation)
2. [Setup](#setup)
3. [Error Handling](#error-handling)
4. [Features with Examples](#features-with-examples)
    - Insert Property
    - List Properties
    - Delete Property
    - Retrieve Locations
5. [Middleware Usage](#middleware-usage)
    - Using Built-In Middlewares
    - Creating Custom Middleware

---

## Installation

### Prerequisites

To use the Casafari SDK, ensure you have the following installed:

- **PHP 8.3 or later**
- [Composer](https://getcomposer.org/) for dependency management

### Installation via Composer

The SDK library is available as a public package on Packagist under the name `dmorenof/casafari-sdk`.

To install it in your project, run the following Composer command:

```bash
composer require dmorenof/casafari-sdk
```

This will download and include the latest version of the SDK and its dependencies into your project automatically.

---

### Installation from the GitHub Repository

You can also clone the repository directly from GitHub if you want to work with the SDK's source code.
The repository is available at the following URL:

```bash
git clone https://github.com/dmorenof/casafari-sdk.git
```

After cloning, install the dependencies by running:

```bash
composer install
```

Include Composer's autoloader in your project to ensure the SDK classes are properly loaded:

```php
require __DIR__ . '/vendor/autoload.php';
```

---

## Setup

Before interacting with the Casafari SDK, configure your environment with the following essential details:

1. **Server URL**: Use `HttpClient::DEVELOPMENT_SERVER_URL` for development or `HttpClient::PRODUCTION_SERVER_URL` for
   production.
2. **Access Token**: A valid API token is required for authentication.

Example of initializing the API Client for development:

```php
use CasafariSDK\Core\HttpClient;
use CasafariSDK\PropertyApi;

$server = HttpClient::DEVELOPMENT_SERVER_URL; // or your server URL
$access_token = 'Basic <YOUR_ACCESS_TOKEN>'; // Replace it with your access token

$PropertyApi = new PropertyApi($server, $access_token);
```

Make sure the `$server` and `$access_token` values are configured properly in your application to avoid authentication
issues.

---

## Error Handling

The SDK provides a streamlined way to handle errors, such as invalid API requests, network errors, or unexpected issues,
by using PHP exceptions.
All operations should be wrapped in `try-catch` blocks to gracefully handle errors and ensure
proper application flow.

The possible errors are ***Exception***, ***TypeError*** and ***InvalidArgumentException***

### Basic Approach for Handling Errors

Use the `try-catch` block to catch exceptions thrown during SDK operations:

```php
try {
    $PropertyApi = new PropertyApi($server, $access_token);
    
    // Perform an operation
    $response = $PropertyApi->sendProperty($request);
    
    // Process the response
    var_dump($response);
} catch (Throwable $Throwable) {
    // Example of how to handle the errors
    echo $Throwable::class . ': ' . $Throwable->getMessage() . PHP_EOL;
}
```

### Best Practices for Error Handling

1. **Log Errors**: Always log errors for debugging purposes, especially in production systems.
2. **Handle Specific Error Types**: Catch specific exception types if needed for more granular error handling.
3. **Graceful Fallbacks**: Provide clear feedback to users or use fallback mechanisms when operations fail.

---

## Features with Examples

Below are the main SDK features with code examples demonstrating how to implement them.

---

### 1. Insert a Property

This feature inserts properties into the Casafari system.

#### Example Using Direct Object Construction

```php
$PropertyApi = new PropertyApi($server, $access_token);

$PropertyRequest = new PropertyRequest();
$PropertyRequest->TimeStamp = date(DATE_RFC3339_EXTENDED);
$PropertyRequest->Version = 0.1;
$PropertyRequest->CorrelationId = uniqid();
$PropertyRequest->Properties = new PropertiesArray();

$Property = new Property();
$Property->internalId = 'unique_id_1';
$Property->reference = 'reference_1';
$Property->status = PropertyStatusEnum::Active;

// Example of adding a record to a TypedArray after construction
$PropertyRequest->Properties[] = $Property;

// This will return a /CasafariSDK/Responses/PropertyResponse object
$response = $PropertyApi->sendProperty($PropertyRequest);
```

---

### 2. List Properties

This feature retrieves a list of properties filtered by various criteria (for example, location, status, visibility).

#### Example with Location-Based Filtering

```php
$PropertyApi = new PropertyApi($server, $access_token);

$PropertyListRequest = new PropertyListRequest();
$PropertyListRequest->Active = true; // Only active properties
$PropertyListRequest->VisibleOnWebsite = true; // Visible on website

$Location = new LocationListRequest();
$Location->CountryCode = CountryEnum::es; // Filter by Spain

// Example of adding a record to a TypedArray on construction
$PropertyListRequest->Locations = new LocationListRequestsArray([$Location]);

// This will return a /CasafariSDK/Responses/PropertyListResponse object
$response = $PropertyApi->getPropertyList($PropertyListRequest);
```

---

### 3. Delete a Property

This feature deletes specified properties from the system.

#### Example Using Direct Object Construction

```php
$PropertyApi = new PropertyApi($server, $access_token);

// This will return a /CasafariSDK/Responses/PropertyResponse object
$response = $PropertyApi->deleteProperty(new PropertyRequest((object)[
    'TimeStamp' => date(DATE_RFC3339_EXTENDED)
    'Version' => 0.1
    'CorrelationId' => uniqid()
    'Properties' => (object)[
        'internalId' => 'unique_id_1',
        'reference' => 'reference_1',
    ]
]));
```

---

### 4. Retrieve Locations

This feature fetches location data based on specific filters like country, structure level, and preferred language.

#### Example Using Multiple Filters

```php
$PropertyApi = new PropertyApi($server, $access_token);

// This will return a /CasafariSDK/Responses/PropertyLocationResponse object
$response = $PropertyApi->getLocations(new PropertyLocationRequest((object)[
    'CountryCode' => CountryEnum::es->value, // Spain
    'Level' => 1, // Level of location structure
    'PrimaryLangId' => 724, // Language preference
]));
```

---

## Middleware Usage

Middleware is a powerful system that allows you to intercept and customize HTTP requests and responses processed through
the SDK.
All middleware classes must implement the `HttpMiddlewareInterface`, which provides the following methods:

1. **`beforeRequest`**:
    - Triggered **before** the HTTP request is sent.
    - Allows you to modify the request details, such as the HTTP method, endpoint, query parameters, or JSON payload.
    - If the method returns `false`, the request will be aborted.

2. **`afterRequest`**:
    - Triggered **after** the HTTP request is completed and a response is received.
    - Allows you to inspect or modify the response, such as analyzing the body or updating the response class.
    - If the method returns `false`, further processing of the response will be stopped.

---

### Using Built-In Middlewares

The Casafari SDK provides built-in middlewares that implement the `HttpMiddlewareInterface`.

#### Example: LogMiddleware

The `LogMiddleware` logs details about HTTP requests and responses, making debugging easier.
It captures details like
the HTTP method, endpoint, query parameters, request payload, and the returned response.

```php
use CasafariSDK\Middlewares\LogMiddleware;
use CasafariSDK\PropertyApi;

$PropertyApi = new PropertyApi($server, $access_token);

// Attach the LogMiddleware to log requests and responses
$PropertyApi->withMiddleware(new LogMiddleware());
```

---

### Creating and Using Custom Middleware

To implement custom middleware, you need to create a class that implements the `HttpMiddlewareInterface`.
This gives you
control over the behavior of requests and responses.

#### Example Custom Middleware: API Request Logger

The following middleware logs request and response details to a file for debugging purposes.

```php
use CasafariSDK\Core\HttpMiddlewareInterface;
use Alexanderpas\Common\HTTP\Method;
use Psr\Http\Message\ResponseInterface;

class CustomLoggerMiddleware implements HttpMiddlewareInterface
{
    public function beforeRequest(
        string &$response_class,
        Method &$method,
        string &$endpoint,
        ?array &$query,
        ?string &$json
    ): bool {
        // Log request details
        error_log("Request: {$method} {$endpoint}\nQuery: " . json_encode($query) . "\nPayload: {$json}");
        return true; // Allow the request to continue
    }

    public function afterRequest(
        string &$response_class,
        Method &$method,
        string &$endpoint,
        ?array &$query,
        ?string &$json,
        ResponseInterface &$response,
        ?string &$body
    ): bool {
        // Log response details
        error_log("Response: HTTP " . $response->getStatusCode() . "\nBody: {$body}");
        return true; // Allow further processing
    }
}
```

---

#### Adding Custom Middleware to the SDK Client

```php
use CasafariSDK\PropertyApi;

// Initialize the API Client
$PropertyApi = new PropertyApi($server, $access_token);

// Attach the custom middleware
$PropertyApi->withMiddleware(new CustomLoggerMiddleware());
```

---

### Notes on Middleware Execution

- Middleware is executed **in the order it is added**:
    - `beforeRequest` is called for all middlewares before the request is sent.
    - `afterRequest` is called for all middlewares after the request is completed.
- If middleware returns `false` in either method, the next middleware in the chain will not be executed, and the process
  will stop.

Middleware allows you to easily extend and customize the behavior of the SDK, whether it involves logging, adding
headers, handling responses, or injecting additional functionality.
