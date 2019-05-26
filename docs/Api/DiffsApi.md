# VerbruggenAlex\PhpDiffy\DiffsApi

All URIs are relative to *https://virtserver.swaggerhub.com/verbruggenalex/diffy/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diffsIdActionPut**](DiffsApi.md#diffsIdActionPut) | **PUT** /diffs/{id}/{action} | Start/stop diff&#x27;s jobs
[**diffsIdDelete**](DiffsApi.md#diffsIdDelete) | **DELETE** /diffs/{id} | Delete Diff
[**diffsIdGet**](DiffsApi.md#diffsIdGet) | **GET** /diffs/{id} | Full info of the Diff
[**diffsIdPut**](DiffsApi.md#diffsIdPut) | **PUT** /diffs/{id} | Update diff name
[**projectsIdDiffsPost**](DiffsApi.md#projectsIdDiffsPost) | **POST** /projects/{id}/diffs | Create Diff

# **diffsIdActionPut**
> string diffsIdActionPut($id, $action)

Start/stop diff's jobs

Start/stop diff's jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID
$action = "action_example"; // string | Action type

try {
    $result = $apiInstance->diffsIdActionPut($id, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdActionPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |
 **action** | **string**| Action type |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdDelete**
> string diffsIdDelete($id)

Delete Diff

Delete Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID

try {
    $result = $apiInstance->diffsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdGet**
> \VerbruggenAlex\PhpDiffy\Model\FullDiff diffsIdGet($id)

Full info of the Diff

Get full details of the Diff

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID

try {
    $result = $apiInstance->diffsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\FullDiff**](../Model/FullDiff.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diffsIdPut**
> \VerbruggenAlex\PhpDiffy\Model\DiffUpdateResponse diffsIdPut($id, $body)

Update diff name

Update diff name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Diff ID
$body = new \VerbruggenAlex\PhpDiffy\Model\DiffUpdateData(); // \VerbruggenAlex\PhpDiffy\Model\DiffUpdateData | 

try {
    $result = $apiInstance->diffsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Diff ID |
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\DiffUpdateData**](../Model/DiffUpdateData.md)|  | [optional]

### Return type

[**\VerbruggenAlex\PhpDiffy\Model\DiffUpdateResponse**](../Model/DiffUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsIdDiffsPost**
> BigDecimal projectsIdDiffsPost($id, $body)

Create Diff

Create Diff for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new VerbruggenAlex\PhpDiffy\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID
$body = new \VerbruggenAlex\PhpDiffy\Model\CreateDiff(); // \VerbruggenAlex\PhpDiffy\Model\CreateDiff | 

try {
    $result = $apiInstance->projectsIdDiffsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->projectsIdDiffsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID |
 **body** | [**\VerbruggenAlex\PhpDiffy\Model\CreateDiff**](../Model/CreateDiff.md)|  | [optional]

### Return type

[**BigDecimal**](../Model/BigDecimal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

