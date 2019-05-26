# VerbruggenAlex\PhpDiffy\ScreenshotsApi

All URIs are relative to *https://virtserver.swaggerhub.com/verbruggenalex/diffy/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsIdScreenshotsPost**](ScreenshotsApi.md#projectsIdScreenshotsPost) | **POST** /projects/{id}/screenshots | Create Screenshot
[**snapshotsIdActionPut**](ScreenshotsApi.md#snapshotsIdActionPut) | **PUT** /snapshots/{id}/{action} | Start/stop screenshot&#x27;s jobs
[**snapshotsIdDelete**](ScreenshotsApi.md#snapshotsIdDelete) | **DELETE** /snapshots/{id} | Delete Screenshot
[**snapshotsIdGet**](ScreenshotsApi.md#snapshotsIdGet) | **GET** /snapshots/{id} | Full info of the Screenshot
[**snapshotsIdPut**](ScreenshotsApi.md#snapshotsIdPut) | **PUT** /snapshots/{id} | Update screenshot name

# **projectsIdScreenshotsPost**
> BigDecimal projectsIdScreenshotsPost($id, $body)

Create Screenshot

Create Screenshot for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \VerbruggenAlex\PhpDiffy\Model\CreateScreenshot(); // \VerbruggenAlex\PhpDiffy\Model\CreateScreenshot | 

try {
    $result = $apiInstance->projectsIdScreenshotsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->projectsIdScreenshotsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\CreateScreenshot**](../Model/CreateScreenshot.md)|  | [optional]

### Return type

[**BigDecimal**](../Model/BigDecimal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdActionPut**
> string snapshotsIdActionPut($id, $action)

Start/stop screenshot's jobs

Start/stop screenshot's jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID
$action = "action_example"; // string | Action type

try {
    $result = $apiInstance->snapshotsIdActionPut($id, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdActionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |
 **action** | **string**| Action type |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdDelete**
> string snapshotsIdDelete($id)

Delete Screenshot

Delete Screenshot if it is not used by any Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID

try {
    $result = $apiInstance->snapshotsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdGet**
> \VerbruggenAlex\PhpDiffy\Model\FullScreenshot snapshotsIdGet($id)

Full info of the Screenshot

Get full details of the Screenshot

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID

try {
    $result = $apiInstance->snapshotsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\FullScreenshot**](../Model/FullScreenshot.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **snapshotsIdPut**
> \VerbruggenAlex\PhpDiffy\Model\ScreenshotUpdateResponse snapshotsIdPut($id, $body)

Update screenshot name

Update screenshot name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\ScreenshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Screenshot ID
$body = new \VerbruggenAlex\PhpDiffy\Model\ScreenshotUpdateData(); // \VerbruggenAlex\PhpDiffy\Model\ScreenshotUpdateData | 

try {
    $result = $apiInstance->snapshotsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotsApi->snapshotsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Screenshot ID |
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\ScreenshotUpdateData**](../Model/ScreenshotUpdateData.md)|  | [optional]

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\ScreenshotUpdateResponse**](../Model/ScreenshotUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

