# OpenAPIClient-php

Division: Post & Parcel Germany<br /> The INTERNETMARKE is the online-postage for mail products of Deutsche Post AG.

For more information, please visit [https://www.deutschepost.de/de/i/internetmarke-porto-drucken/kundenservice/internetmarke/kontakt.html](https://www.deutschepost.de/de/i/internetmarke-porto-drucken/kundenservice/internetmarke/kontakt.html).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
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

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.26`
    - Generator version: `7.12.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
