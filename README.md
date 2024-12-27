# OpenAPIClient-php

Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.

For more information, please visit [https://www.deutschepost.de/de/i/internetmarke-porto-drucken/kundenservice/internetmarke/kontakt.html](https://www.deutschepost.de/de/i/internetmarke-porto-drucken/kundenservice/internetmarke/kontakt.html).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/),

run `composer require kruegge82/deutschepost-internetmarke-php-sdk`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new kruegge82\DPIM\Api\ApiVersionResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiVersionResourceApi->apiVersion: ', $e->getMessage(), PHP_EOL;
}

```

## Full DirectCheckout Example

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new kruegge82\DPIM\Api\UserResourceApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'client_credentials'; // string | OAuth2 standard content, must be set to 'client_credentials'
$username = 'franz.klammer@dhldp-test.de'; // string | Internetmarke user name (e.g. 'franz.klammer').
$password = 'abfahrt123#'; // string | Internetmarke password (e.g. 'abfahrt123#')
$client_id = 'XjSnyVWgQp1ShIQ5HQ6Vq5PIYLN2jGNS'; // string | API client_id obtained from developer portal (e.g. 'XjSnyVWgQp1ShIQ5HQ6Vq5PIYLN2jGNS')
$client_secret = 'TICgJWGRysH7mA57'; // string | API client_secret obtained from developer portal (e.g. 'TICgJWGRysH7mA57')
$for_payment = false; // bool | Flag to indicate the authorization for payment use case.


try {
    $result = $apiInstance->authorization($grant_type, $username, $password, $client_id, $client_secret, $for_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserResourceApi->authorization: ', $e->getMessage(), PHP_EOL;
}

// Configure Bearer authorization: BearerAuth
$config = kruegge82\DPIM\Configuration::getDefaultConfiguration()->setAccessToken($result->getAccessToken());

$apiInstance = new kruegge82\DPIM\Api\AppResourceApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$AppShoppingCartPDFPosition=new \kruegge82\DPIM\Model\AppShoppingCartPDFPosition();
$AppShoppingCartPDFPosition->setProductCode(10001);
$AppShoppingCartPDFPosition->setVoucherLayout("ADDRESS_ZONE");
$position = new \kruegge82\DPIM\Model\VoucherPosition();
$position->setPage(1);
$position->setLabelX(1);
$position->setLabelY(1);
$AppShoppingCartPDFPosition->setPosition($position);
$AppShoppingCartPDFPosition->setPositionType("AppShoppingCartPDFPosition");

$checkout_shopping_cart_pdf_app_request = new \kruegge82\DPIM\Model\AppShoppingCartPDFRequest();
$checkout_shopping_cart_pdf_app_request->setType('AppShoppingCartPDFRequest');
$checkout_shopping_cart_pdf_app_request->setPageFormatId(2);
//$checkout_shopping_cart_pdf_app_request->setShopOrderId($result->getShopOrderId());
$checkout_shopping_cart_pdf_app_request->setPositions([$AppShoppingCartPDFPosition]);
$checkout_shopping_cart_pdf_app_request->setTotal(110);
//$checkout_shopping_cart_pdf_app_request->setCreateManifest(false);
//$checkout_shopping_cart_pdf_app_request->setCreateShippingList(false);
$checkout_shopping_cart_pdf_app_request->setDpi('DPI203');
$validate = false; // bool | This request parameter enables the validate (preview) case.<br/>The response will contain the link to a preview image of an internet stamp in PDF format. A product code, a layout format and optionally a motif are transferred to the service. This information is encoded in the link and evaluated by INTERNETMARKE when the preview image is rendered. If the product code, print format, or theme ID is invalid, the response to the caller will contain appropriate information.   <br/><br/> For the validate (preview) case the 'Authorization' header is not required and the request body has to be of the specified type (See `#/components/schemas/AppShoppingCartPreviewPDFRequest`).
$finalize = false; // bool | This request parameter enables the direct finalization of the shopping cart and an extra finalization request is not required.
$directCheckout = true; // bool | This request parameter enables the direct checkout of the shopping cart and an extra finalization request is not required.

try {
    $result = $apiInstance->checkoutShoppingCartPDFApp($checkout_shopping_cart_pdf_app_request, $validate, $finalize, $directCheckout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppResourceApi->checkoutShoppingCartPDFApp: ', $e->getMessage(), PHP_EOL;
}

```


## API Endpoints

All URIs are relative to *https://api-eu.dhl.com/post/de/shipping/im/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiVersionResourceApi* | [**apiVersion**](docs/Api/ApiVersionResourceApi.md#apiversion) | **GET** / | Get information about this REST Api version.
*AppResourceApi* | [**chargeWallet**](docs/Api/AppResourceApi.md#chargewallet) | **PUT** /app/wallet | Charge users wallet
*AppResourceApi* | [**checkoutShoppingCartPDFApp**](docs/Api/AppResourceApi.md#checkoutshoppingcartpdfapp) | **POST** /app/shoppingcart/pdf | Checkouts ot the PDF shopping cart.
*AppResourceApi* | [**checkoutShoppingCartPNGApp**](docs/Api/AppResourceApi.md#checkoutshoppingcartpngapp) | **POST** /app/shoppingcart/png | Checkouts ot the PNG shopping cart.
*AppResourceApi* | [**initShoppingCartApp**](docs/Api/AppResourceApi.md#initshoppingcartapp) | **POST** /app/shoppingcart | Initializes a shopping cart and returns the shopOrderId.
*AppResourceApi* | [**retoureVouchersApp**](docs/Api/AppResourceApi.md#retourevouchersapp) | **POST** /app/retoure | Retoure vouchers For App.
*AppResourceApi* | [**retrieveCatalogApp**](docs/Api/AppResourceApi.md#retrievecatalogapp) | **GET** /app/catalog | Retrieve catalogs.
*AppResourceApi* | [**retrieveRetoureStateApp**](docs/Api/AppResourceApi.md#retrieveretourestateapp) | **GET** /app/retoure | Retrieve retoure state for App.
*AppResourceApi* | [**retrieveShoppingCartApp**](docs/Api/AppResourceApi.md#retrieveshoppingcartapp) | **GET** /app/shoppingcart/{shopOrderId} | Retrieves a shopping cart.
*UserResourceApi* | [**authorization**](docs/Api/UserResourceApi.md#authorization) | **POST** /user | Get authorization token.
*UserResourceApi* | [**retrieveUserData**](docs/Api/UserResourceApi.md#retrieveuserdata) | **GET** /user/profile | Authenticate and retrieve authorized user&#39;s data for shop.

## Models

- [Address](docs/Model/Address.md)
- [AddressBinding](docs/Model/AddressBinding.md)
- [ApiVersion200Response](docs/Model/ApiVersion200Response.md)
- [ApiVersion200ResponseAmp](docs/Model/ApiVersion200ResponseAmp.md)
- [ApiVersionResponse](docs/Model/ApiVersionResponse.md)
- [AppCheckoutPDFRequest](docs/Model/AppCheckoutPDFRequest.md)
- [AppCheckoutPNGRequest](docs/Model/AppCheckoutPNGRequest.md)
- [AppShoppingCartPDFPosition](docs/Model/AppShoppingCartPDFPosition.md)
- [AppShoppingCartPDFRequest](docs/Model/AppShoppingCartPDFRequest.md)
- [AppShoppingCartPNGRequest](docs/Model/AppShoppingCartPNGRequest.md)
- [AppShoppingCartPosition](docs/Model/AppShoppingCartPosition.md)
- [AppShoppingCartPreviewPDFRequest](docs/Model/AppShoppingCartPreviewPDFRequest.md)
- [AppShoppingCartPreviewPNGRequest](docs/Model/AppShoppingCartPreviewPNGRequest.md)
- [Authentication200Response](docs/Model/Authentication200Response.md)
- [BorderDimension](docs/Model/BorderDimension.md)
- [CashOnDelivery](docs/Model/CashOnDelivery.md)
- [CatalogItem](docs/Model/CatalogItem.md)
- [ChargeWalletResponse](docs/Model/ChargeWalletResponse.md)
- [CheckoutShoppingCartAppResponse](docs/Model/CheckoutShoppingCartAppResponse.md)
- [CheckoutShoppingCartPDFAppRequest](docs/Model/CheckoutShoppingCartPDFAppRequest.md)
- [CheckoutShoppingCartPNGAppRequest](docs/Model/CheckoutShoppingCartPNGAppRequest.md)
- [ContractProduct](docs/Model/ContractProduct.md)
- [ContractProducts](docs/Model/ContractProducts.md)
- [Dimension](docs/Model/Dimension.md)
- [Error401Response](docs/Model/Error401Response.md)
- [Error429Response](docs/Model/Error429Response.md)
- [ImageItem](docs/Model/ImageItem.md)
- [InitShoppingCartResponse](docs/Model/InitShoppingCartResponse.md)
- [MotiveLink](docs/Model/MotiveLink.md)
- [PageFormat](docs/Model/PageFormat.md)
- [PageLayout](docs/Model/PageLayout.md)
- [Position](docs/Model/Position.md)
- [PrivateCatalog](docs/Model/PrivateCatalog.md)
- [PublicCatalog](docs/Model/PublicCatalog.md)
- [RequestStatus](docs/Model/RequestStatus.md)
- [RetoureState](docs/Model/RetoureState.md)
- [RetoureVouchersRequest](docs/Model/RetoureVouchersRequest.md)
- [RetoureVouchersResponse](docs/Model/RetoureVouchersResponse.md)
- [RetrieveCatalogResponse](docs/Model/RetrieveCatalogResponse.md)
- [RetrieveRetoureStateResponse](docs/Model/RetrieveRetoureStateResponse.md)
- [RetrieveUserDataResponse](docs/Model/RetrieveUserDataResponse.md)
- [ShoppingCart](docs/Model/ShoppingCart.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherPosition](docs/Model/VoucherPosition.md)

## Authorization

### BearerAuth

- **Type**: Bearer authentication
