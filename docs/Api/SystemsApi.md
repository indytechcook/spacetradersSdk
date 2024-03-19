# OpenAPI\Client\SystemsApi

All URIs are relative to https://api.spacetraders.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConstruction()**](SystemsApi.md#getConstruction) | **GET** /systems/{systemSymbol}/waypoints/{waypointSymbol}/construction | Get Construction Site |
| [**getJumpGate()**](SystemsApi.md#getJumpGate) | **GET** /systems/{systemSymbol}/waypoints/{waypointSymbol}/jump-gate | Get Jump Gate |
| [**getMarket()**](SystemsApi.md#getMarket) | **GET** /systems/{systemSymbol}/waypoints/{waypointSymbol}/market | Get Market |
| [**getShipyard()**](SystemsApi.md#getShipyard) | **GET** /systems/{systemSymbol}/waypoints/{waypointSymbol}/shipyard | Get Shipyard |
| [**getSystem()**](SystemsApi.md#getSystem) | **GET** /systems/{systemSymbol} | Get System |
| [**getSystemWaypoints()**](SystemsApi.md#getSystemWaypoints) | **GET** /systems/{systemSymbol}/waypoints | List Waypoints in System |
| [**getSystems()**](SystemsApi.md#getSystems) | **GET** /systems | List Systems |
| [**getWaypoint()**](SystemsApi.md#getWaypoint) | **GET** /systems/{systemSymbol}/waypoints/{waypointSymbol} | Get Waypoint |
| [**supplyConstruction()**](SystemsApi.md#supplyConstruction) | **POST** /systems/{systemSymbol}/waypoints/{waypointSymbol}/construction/supply | Supply Construction Site |


## `getConstruction()`

```php
getConstruction($systemSymbol, $waypointSymbol): \OpenAPI\Client\Model\GetConstruction200Response
```

Get Construction Site

Get construction details for a waypoint. Requires a waypoint with a property of `isUnderConstruction` to be true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol

try {
    $result = $apiInstance->getConstruction($systemSymbol, $waypointSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getConstruction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |

### Return type

[**\OpenAPI\Client\Model\GetConstruction200Response**](../Model/GetConstruction200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJumpGate()`

```php
getJumpGate($systemSymbol, $waypointSymbol): \OpenAPI\Client\Model\GetJumpGate200Response
```

Get Jump Gate

Get jump gate details for a waypoint. Requires a waypoint of type `JUMP_GATE` to use.  Waypoints connected to this jump gate can be

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol

try {
    $result = $apiInstance->getJumpGate($systemSymbol, $waypointSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getJumpGate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |

### Return type

[**\OpenAPI\Client\Model\GetJumpGate200Response**](../Model/GetJumpGate200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarket()`

```php
getMarket($systemSymbol, $waypointSymbol): \OpenAPI\Client\Model\GetMarket200Response
```

Get Market

Retrieve imports, exports and exchange data from a marketplace. Requires a waypoint that has the `Marketplace` trait to use.  Send a ship to the waypoint to access trade good prices and recent transactions. Refer to the [Market Overview page](https://docs.spacetraders.io/game-concepts/markets) to gain better a understanding of the market in the game.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol

try {
    $result = $apiInstance->getMarket($systemSymbol, $waypointSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getMarket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |

### Return type

[**\OpenAPI\Client\Model\GetMarket200Response**](../Model/GetMarket200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipyard()`

```php
getShipyard($systemSymbol, $waypointSymbol): \OpenAPI\Client\Model\GetShipyard200Response
```

Get Shipyard

Get the shipyard for a waypoint. Requires a waypoint that has the `Shipyard` trait to use. Send a ship to the waypoint to access data on ships that are currently available for purchase and recent transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol

try {
    $result = $apiInstance->getShipyard($systemSymbol, $waypointSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getShipyard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |

### Return type

[**\OpenAPI\Client\Model\GetShipyard200Response**](../Model/GetShipyard200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystem()`

```php
getSystem($systemSymbol): \OpenAPI\Client\Model\GetSystem200Response
```

Get System

Get the details of a system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'X1-OE'; // string | The system symbol

try {
    $result = $apiInstance->getSystem($systemSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | [default to &#39;X1-OE&#39;] |

### Return type

[**\OpenAPI\Client\Model\GetSystem200Response**](../Model/GetSystem200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemWaypoints()`

```php
getSystemWaypoints($systemSymbol, $page, $limit, $type, $traits): \OpenAPI\Client\Model\GetSystemWaypoints200Response
```

List Waypoints in System

Return a paginated list of all of the waypoints for a given system.  If a waypoint is uncharted, it will return the `Uncharted` trait instead of its actual traits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$page = 1; // int | What entry offset to request
$limit = 10; // int | How many entries to return per page
$type = new \OpenAPI\Client\Model\WaypointType(); // WaypointType | Filter waypoints by type.
$traits = new \OpenAPI\Client\Model\GetSystemWaypointsTraitsParameter(); // GetSystemWaypointsTraitsParameter | Filter waypoints by one or more traits.

try {
    $result = $apiInstance->getSystemWaypoints($systemSymbol, $page, $limit, $type, $traits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystemWaypoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **page** | **int**| What entry offset to request | [optional] [default to 1] |
| **limit** | **int**| How many entries to return per page | [optional] [default to 10] |
| **type** | [**WaypointType**](../Model/.md)| Filter waypoints by type. | [optional] |
| **traits** | [**GetSystemWaypointsTraitsParameter**](../Model/.md)| Filter waypoints by one or more traits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetSystemWaypoints200Response**](../Model/GetSystemWaypoints200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystems()`

```php
getSystems($page, $limit): \OpenAPI\Client\Model\GetSystems200Response
```

List Systems

Return a paginated list of all systems.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | What entry offset to request
$limit = 10; // int | How many entries to return per page

try {
    $result = $apiInstance->getSystems($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getSystems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| What entry offset to request | [optional] [default to 1] |
| **limit** | **int**| How many entries to return per page | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetSystems200Response**](../Model/GetSystems200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWaypoint()`

```php
getWaypoint($systemSymbol, $waypointSymbol): \OpenAPI\Client\Model\GetWaypoint200Response
```

Get Waypoint

View the details of a waypoint.  If the waypoint is uncharted, it will return the 'Uncharted' trait instead of its actual traits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol

try {
    $result = $apiInstance->getWaypoint($systemSymbol, $waypointSymbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->getWaypoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |

### Return type

[**\OpenAPI\Client\Model\GetWaypoint200Response**](../Model/GetWaypoint200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `supplyConstruction()`

```php
supplyConstruction($systemSymbol, $waypointSymbol, $supplyConstructionRequest): \OpenAPI\Client\Model\SupplyConstruction201Response
```

Supply Construction Site

Supply a construction site with the specified good. Requires a waypoint with a property of `isUnderConstruction` to be true.  The good must be in your ship's cargo. The good will be removed from your ship's cargo and added to the construction site's materials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemSymbol = 'systemSymbol_example'; // string | The system symbol
$waypointSymbol = 'waypointSymbol_example'; // string | The waypoint symbol
$supplyConstructionRequest = new \OpenAPI\Client\Model\SupplyConstructionRequest(); // \OpenAPI\Client\Model\SupplyConstructionRequest | 

try {
    $result = $apiInstance->supplyConstruction($systemSymbol, $waypointSymbol, $supplyConstructionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemsApi->supplyConstruction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **systemSymbol** | **string**| The system symbol | |
| **waypointSymbol** | **string**| The waypoint symbol | |
| **supplyConstructionRequest** | [**\OpenAPI\Client\Model\SupplyConstructionRequest**](../Model/SupplyConstructionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SupplyConstruction201Response**](../Model/SupplyConstruction201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
