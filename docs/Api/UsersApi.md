# VerbruggenAlex\PhpDiffy\UsersApi

All URIs are relative to *https://virtserver.swaggerhub.com/verbruggenalex/diffy/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authKeyPost**](UsersApi.md#authKeyPost) | **POST** /auth/key | Login user via Key
[**loginCheckPost**](UsersApi.md#loginCheckPost) | **POST** /login_check | Login user
[**resetPasswordEmailPost**](UsersApi.md#resetPasswordEmailPost) | **POST** /reset-password-email | Reset user&#x27;s password
[**userKeysGet**](UsersApi.md#userKeysGet) | **GET** /user/keys | Get API keys of the current user
[**userKeysKeyDelete**](UsersApi.md#userKeysKeyDelete) | **DELETE** /user/keys/{key} | Delete user&#x27;s API key
[**userKeysPost**](UsersApi.md#userKeysPost) | **POST** /user/keys | Add new key
[**usersChangePasswordPost**](UsersApi.md#usersChangePasswordPost) | **POST** /users/change-password | Change user&#x27;s password

# **authKeyPost**
> string authKeyPost($body)

Login user via Key

Login user via Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \VerbruggenAlex\PhpDiffy\Model\KeyLogin(); // \VerbruggenAlex\PhpDiffy\Model\KeyLogin | 

try {
    $result = $apiInstance->authKeyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->authKeyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\KeyLogin**](../Model/KeyLogin.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginCheckPost**
> string loginCheckPost($_username, $_password)

Login user

Login user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_username = "_username_example"; // string | 
$_password = "_password_example"; // string | 

try {
    $result = $apiInstance->loginCheckPost($_username, $_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginCheckPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_username** | **string**|  | [optional]
 **_password** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPasswordEmailPost**
> string resetPasswordEmailPost($body)

Reset user's password

Reset user's password. The email with reset link will be send to the provided email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \VerbruggenAlex\PhpDiffy\Model\ResetPassword(); // \VerbruggenAlex\PhpDiffy\Model\ResetPassword | 

try {
    $result = $apiInstance->resetPasswordEmailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->resetPasswordEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\ResetPassword**](../Model/ResetPassword.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userKeysGet**
> \VerbruggenAlex\PhpDiffy\Model\ApiKey userKeysGet()

Get API keys of the current user

Get API keys of the current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userKeysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userKeysKeyDelete**
> \VerbruggenAlex\PhpDiffy\Model\ApiKey userKeysKeyDelete($key)

Delete user's API key

Delete user's API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Key to delete

try {
    $result = $apiInstance->userKeysKeyDelete($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userKeysKeyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Key to delete |

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userKeysPost**
> \VerbruggenAlex\PhpDiffy\Model\ApiKey userKeysPost($body)

Add new key

Add new key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \VerbruggenAlex\PhpDiffy\Model\ApiKey(); // \VerbruggenAlex\PhpDiffy\Model\ApiKey | 

try {
    $result = $apiInstance->userKeysPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userKeysPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\ApiKey**](../Model/ApiKey.md)|  | [optional]

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersChangePasswordPost**
> string usersChangePasswordPost($body)

Change user's password

Change user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new VerbruggenAlex\PhpDiffy\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \VerbruggenAlex\PhpDiffy\Model\ChangePassword(); // \VerbruggenAlex\PhpDiffy\Model\ChangePassword | 

try {
    $result = $apiInstance->usersChangePasswordPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\ChangePassword**](../Model/ChangePassword.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

