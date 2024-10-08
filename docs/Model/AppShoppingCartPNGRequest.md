# # AppShoppingCartPNGRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shop_order_id** | **string** | The order number in the shop. All characters are allowed except &lt; and &amp;. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required. | [optional]
**total** | **int** | Total value of the shopping cart in euro cents. | [optional]
**create_manifest** | **bool** | The flag indicating whether a posting receipt should be created. | [optional]
**create_shipping_list** | **string** | Enum that determines whether a mailing list should be created and if so, whether with or without addresses. | [optional]
**dpi** | **string** |  | [optional]
**optimize_png** | **bool** | The flag to optimize the PNG (avoid redundant area height). | [optional]
**positions** | [**\kruegge82\DPIM\Model\AppShoppingCartPosition[]**](AppShoppingCartPosition.md) | List of PNG order items. At least one item has to be specified. |
**type** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
