# OpenAPI\Client\AppResourceApi

All URIs are relative to https://api-eu.dhl.com/post/de/shipping/im/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chargeWallet()**](AppResourceApi.md#chargeWallet) | **PUT** /app/wallet | Charge users wallet |
| [**checkoutShoppingCartPDFApp()**](AppResourceApi.md#checkoutShoppingCartPDFApp) | **POST** /app/shoppingcart/pdf | Checkouts ot the PDF shopping cart. |
| [**checkoutShoppingCartPNGApp()**](AppResourceApi.md#checkoutShoppingCartPNGApp) | **POST** /app/shoppingcart/png | Checkouts ot the PNG shopping cart. |
| [**initShoppingCartApp()**](AppResourceApi.md#initShoppingCartApp) | **POST** /app/shoppingcart | Initializes a shopping cart and returns the shopOrderId. |
| [**retoureVouchersApp()**](AppResourceApi.md#retoureVouchersApp) | **POST** /app/retoure | Retoure vouchers For App. |
| [**retrieveCatalogApp()**](AppResourceApi.md#retrieveCatalogApp) | **GET** /app/catalog | Retrieve catalogs. |
| [**retrieveRetoureStateApp()**](AppResourceApi.md#retrieveRetoureStateApp) | **GET** /app/retoure | Retrieve retoure state for App. |
| [**retrieveShoppingCartApp()**](AppResourceApi.md#retrieveShoppingCartApp) | **GET** /app/shoppingcart/{shopOrderId} | Retrieves a shopping cart. |


## `chargeWallet()`

```php
chargeWallet($amount): \OpenAPI\Client\Model\ChargeWalletResponse
```

Charge users wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$amount = 56; // int | The amount (positive integer as EUROCENT) to be charged for users wallet.

try {
    $result = $apiInstance->chargeWallet($amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->chargeWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **amount** | **int**| The amount (positive integer as EUROCENT) to be charged for users wallet. | |

### Return type

[**\OpenAPI\Client\Model\ChargeWalletResponse**](../Model/ChargeWalletResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkoutShoppingCartPDFApp()`

```php
checkoutShoppingCartPDFApp($checkout_shopping_cart_pdf_app_request, $validate, $finalize): \OpenAPI\Client\Model\CheckoutShoppingCartAppResponse
```

Checkouts ot the PDF shopping cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_shopping_cart_pdf_app_request = new \OpenAPI\Client\Model\CheckoutShoppingCartPDFAppRequest(); // \OpenAPI\Client\Model\CheckoutShoppingCartPDFAppRequest
$validate = false; // bool | This request parameter enables the validate (preview) case.<br/>The response will contain the link to a preview image of an internet stamp in PDF format. A product code, a layout format and optionally a motif are transferred to the service. This information is encoded in the link and evaluated by INTERNETMARKE when the preview image is rendered. If the product code, print format, or theme ID is invalid, the response to the caller will contain appropriate information.   <br/><br/> For the validate (preview) case the 'Authorization' header is not required and the request body has to be of the specified type (See `#/components/schemas/AppShoppingCartPreviewPDFRequest`).
$finalize = false; // bool | This request parameter enables the direct finalization of the shopping cart and an extra finalization request is not required.

try {
    $result = $apiInstance->checkoutShoppingCartPDFApp($checkout_shopping_cart_pdf_app_request, $validate, $finalize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->checkoutShoppingCartPDFApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_shopping_cart_pdf_app_request** | [**\OpenAPI\Client\Model\CheckoutShoppingCartPDFAppRequest**](../Model/CheckoutShoppingCartPDFAppRequest.md)|  | |
| **validate** | **bool**| This request parameter enables the validate (preview) case.&lt;br/&gt;The response will contain the link to a preview image of an internet stamp in PDF format. A product code, a layout format and optionally a motif are transferred to the service. This information is encoded in the link and evaluated by INTERNETMARKE when the preview image is rendered. If the product code, print format, or theme ID is invalid, the response to the caller will contain appropriate information.   &lt;br/&gt;&lt;br/&gt; For the validate (preview) case the &#39;Authorization&#39; header is not required and the request body has to be of the specified type (See &#x60;#/components/schemas/AppShoppingCartPreviewPDFRequest&#x60;). | [optional] [default to false] |
| **finalize** | **bool**| This request parameter enables the direct finalization of the shopping cart and an extra finalization request is not required. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CheckoutShoppingCartAppResponse**](../Model/CheckoutShoppingCartAppResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkoutShoppingCartPNGApp()`

```php
checkoutShoppingCartPNGApp($checkout_shopping_cart_png_app_request, $validate, $finalize): \OpenAPI\Client\Model\CheckoutShoppingCartAppResponse
```

Checkouts ot the PNG shopping cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_shopping_cart_png_app_request = new \OpenAPI\Client\Model\CheckoutShoppingCartPNGAppRequest(); // \OpenAPI\Client\Model\CheckoutShoppingCartPNGAppRequest
$validate = false; // bool | The response will contain the link to a thumbnail image of an Internet brand in PNG format, which the third-party application must integrate accordingly. The print format is not relevant at this point. The service is given a product code, optionally a motif and a layout format. This information is encoded in the link and evaluated by INTERNETMARKE when the preview image is rendered. If the product code or theme ID is invalid, the response to the caller will contain appropriate information.<br/> For the validate (preview) case the 'Authorization' header is not required.
$finalize = false; // bool | This request parameter enables the direct finalization of the shopping cart and an extra finalization request is not required.

try {
    $result = $apiInstance->checkoutShoppingCartPNGApp($checkout_shopping_cart_png_app_request, $validate, $finalize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->checkoutShoppingCartPNGApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **checkout_shopping_cart_png_app_request** | [**\OpenAPI\Client\Model\CheckoutShoppingCartPNGAppRequest**](../Model/CheckoutShoppingCartPNGAppRequest.md)|  | |
| **validate** | **bool**| The response will contain the link to a thumbnail image of an Internet brand in PNG format, which the third-party application must integrate accordingly. The print format is not relevant at this point. The service is given a product code, optionally a motif and a layout format. This information is encoded in the link and evaluated by INTERNETMARKE when the preview image is rendered. If the product code or theme ID is invalid, the response to the caller will contain appropriate information.&lt;br/&gt; For the validate (preview) case the &#39;Authorization&#39; header is not required. | [optional] [default to false] |
| **finalize** | **bool**| This request parameter enables the direct finalization of the shopping cart and an extra finalization request is not required. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CheckoutShoppingCartAppResponse**](../Model/CheckoutShoppingCartAppResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initShoppingCartApp()`

```php
initShoppingCartApp(): \OpenAPI\Client\Model\InitShoppingCartResponse
```

Initializes a shopping cart and returns the shopOrderId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->initShoppingCartApp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->initShoppingCartApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InitShoppingCartResponse**](../Model/InitShoppingCartResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retoureVouchersApp()`

```php
retoureVouchersApp($retoure_vouchers_request): \OpenAPI\Client\Model\RetoureVouchersResponse
```

Retoure vouchers For App.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retoure_vouchers_request = new \OpenAPI\Client\Model\RetoureVouchersRequest(); // \OpenAPI\Client\Model\RetoureVouchersRequest

try {
    $result = $apiInstance->retoureVouchersApp($retoure_vouchers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->retoureVouchersApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **retoure_vouchers_request** | [**\OpenAPI\Client\Model\RetoureVouchersRequest**](../Model/RetoureVouchersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RetoureVouchersResponse**](../Model/RetoureVouchersResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveCatalogApp()`

```php
retrieveCatalogApp($types): \OpenAPI\Client\Model\RetrieveCatalogResponse
```

Retrieve catalogs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$types = array('types_example'); // string[] | The type of the required catalog, can be specified as single or multiple. Only specified types will be returned.

try {
    $result = $apiInstance->retrieveCatalogApp($types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->retrieveCatalogApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **types** | [**string[]**](../Model/string.md)| The type of the required catalog, can be specified as single or multiple. Only specified types will be returned. | |

### Return type

[**\OpenAPI\Client\Model\RetrieveCatalogResponse**](../Model/RetrieveCatalogResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRetoureStateApp()`

```php
retrieveRetoureStateApp($shop_retoure_id, $retoure_transaction_id, $start_date, $end_date): \OpenAPI\Client\Model\RetrieveRetoureStateResponse
```

Retrieve retoure state for App.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_retoure_id = 'shop_retoure_id_example'; // string | The shopRetoureId was returned from the retoure Vouchers request.
$retoure_transaction_id = 56; // int | Internal transaction number under which the refund was booked in the PCF.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the search. Expected format: yyyy-MM-dd'T'HH:mm:ss.SSSXXX.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the search. Expected format: yyyy-MM-dd'T'HH:mm:ss.SSSXXX.

try {
    $result = $apiInstance->retrieveRetoureStateApp($shop_retoure_id, $retoure_transaction_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->retrieveRetoureStateApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_retoure_id** | **string**| The shopRetoureId was returned from the retoure Vouchers request. | [optional] |
| **retoure_transaction_id** | **int**| Internal transaction number under which the refund was booked in the PCF. | [optional] |
| **start_date** | **\DateTime**| The start date of the search. Expected format: yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSXXX. | [optional] |
| **end_date** | **\DateTime**| The end date of the search. Expected format: yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSXXX. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RetrieveRetoureStateResponse**](../Model/RetrieveRetoureStateResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveShoppingCartApp()`

```php
retrieveShoppingCartApp($shop_order_id): \OpenAPI\Client\Model\CheckoutShoppingCartAppResponse
```

Retrieves a shopping cart.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AppResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_order_id = 'shop_order_id_example'; // string | The shopOrderId was responsed within the response body of the checkout operation.

try {
    $result = $apiInstance->retrieveShoppingCartApp($shop_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->retrieveShoppingCartApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_order_id** | **string**| The shopOrderId was responsed within the response body of the checkout operation. | |

### Return type

[**\OpenAPI\Client\Model\CheckoutShoppingCartAppResponse**](../Model/CheckoutShoppingCartAppResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
