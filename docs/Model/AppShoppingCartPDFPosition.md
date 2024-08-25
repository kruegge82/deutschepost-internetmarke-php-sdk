# # AppShoppingCartPDFPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_code** | **int** | The product code for the selected product, e.g. standard letter, maxi letter etc. The product code can be derived from ProdWS integration or directly taken from the downloadable product price lists (PPLs). The product code must be greater than 0 and the product must be available in the third-party application. |
**image_id** | **int** | The id of the motif to be printed. | [optional]
**address** | [**\OpenAPI\Client\Model\AddressBinding**](AddressBinding.md) |  | [optional]
**additional_info** | **string** | Additional information on the order item. | [optional]
**voucher_layout** | **string** |  |
**cash_on_delivery** | [**\OpenAPI\Client\Model\CashOnDelivery**](CashOnDelivery.md) |  | [optional]
**position_type** | **string** |  |
**position** | [**\OpenAPI\Client\Model\VoucherPosition**](VoucherPosition.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)