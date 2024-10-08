# kruegge82\DPIM\UserResourceApi

All URIs are relative to https://api-eu.dhl.com/post/de/shipping/im/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorization()**](UserResourceApi.md#authorization) | **POST** /user | Get authorization token. |
| [**retrieveUserData()**](UserResourceApi.md#retrieveUserData) | **GET** /user/profile | Authenticate and retrieve authorized user&#39;s data for shop. |


## `authorization()`

```php
authorization($grant_type, $username, $password, $client_id, $client_secret, $for_payment): \kruegge82\DPIM\Model\Authentication200Response
```

Get authorization token.

__This request is the precondition for almost all other calls!__  The call provides you with the Bearer token which is then used for all other calls.  Here is how: The client makes a POST request to the 'user' resource by adding the following parameters  using the application/x-www-form-urlencoded format with a character encoding of UTF-8 in the HTTP request body:  * grant_type __REQUIRED__. Must be set to \"client_credentials\".  * client_id __REQUIRED__ (aka client_id (api key)  -- obtained in DHL Developer Portal)  * client_secret __REQUIRED__ (aka client_secret -- obtained in DHL Developer Portal)  * username __REQUIRED__.   * password __REQUIRED__.   The internetmarke credentials (username, password) for production access will be provided during onboarding, along with additional information. For sandbox access, suitable default values exist. See the remainder of the documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new kruegge82\DPIM\Api\UserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = 'grant_type_example'; // string | OAuth2 standard content, must be set to 'client_credentials'
$username = 'username_example'; // string | Internetmarke user name (e.g. 'franz.klammer').
$password = 'password_example'; // string | Internetmarke password (e.g. 'abfahrt123#')
$client_id = 'client_id_example'; // string | API client_id obtained from developer portal (e.g. 'XjSnyVWgQp1ShIQ5HQ6Vq5PIYLN2jGNS')
$client_secret = 'client_secret_example'; // string | API client_secret obtained from developer portal (e.g. 'TICgJWGRysH7mA57')
$for_payment = false; // bool | Flag to indicate the authorization for payment use case.

try {
    $result = $apiInstance->authorization($grant_type, $username, $password, $client_id, $client_secret, $for_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserResourceApi->authorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**| OAuth2 standard content, must be set to &#39;client_credentials&#39; | |
| **username** | **string**| Internetmarke user name (e.g. &#39;franz.klammer&#39;). | |
| **password** | **string**| Internetmarke password (e.g. &#39;abfahrt123#&#39;) | |
| **client_id** | **string**| API client_id obtained from developer portal (e.g. &#39;XjSnyVWgQp1ShIQ5HQ6Vq5PIYLN2jGNS&#39;) | |
| **client_secret** | **string**| API client_secret obtained from developer portal (e.g. &#39;TICgJWGRysH7mA57&#39;) | |
| **for_payment** | **bool**| Flag to indicate the authorization for payment use case. | [optional] [default to false] |

### Return type

[**\kruegge82\DPIM\Model\Authentication200Response**](../Model/Authentication200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveUserData()`

```php
retrieveUserData(): \kruegge82\DPIM\Model\RetrieveUserDataResponse
```

Authenticate and retrieve authorized user's data for shop.

The client retrieves certain settings about his user profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = kruegge82\DPIM\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new kruegge82\DPIM\Api\UserResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveUserData();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserResourceApi->retrieveUserData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\DPIM\Model\RetrieveUserDataResponse**](../Model/RetrieveUserDataResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
