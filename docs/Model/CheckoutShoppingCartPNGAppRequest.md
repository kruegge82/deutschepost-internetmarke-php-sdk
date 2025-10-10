# # CheckoutShoppingCartPNGAppRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**shop_order_id** | **string** | The order number in the shop. All characters are allowed except &lt; and &amp;. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required. | [optional]
**total** | **int** | Total value of the shopping cart in euro cents. | [optional]
**create_manifest** | **bool** | The flag indicating whether a posting receipt should be created. | [optional]
**create_shipping_list** | **string** | Enum that determines whether a mailing list should be created and if so, whether with or without addresses. | [optional]
**dpi** | **string** |  | [optional]
**optimize_png** | **bool** | Flag to optimize the PNG. | [optional]
**positions** | [**\kruegge82\DPIM\Model\AppShoppingCartPosition[]**](AppShoppingCartPosition.md) | List of PNG order items. At least one item has to be specified. |
**product_code** | **int** | The product code for the selected product, e.g. standard letter, maxi letter etc. The product code must be greater than 0 and the product must be available in the third-party application. | [optional]
**image_id** | **int** | The ID of the motif. | [optional]
**voucher_layout** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
