# # AppShoppingCartPDFRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | set AppShoppingCartPDFRequest if validate&#x3D;false, AppShoppingCartPreviewPDFRequest if validate&#x3D;true | [default to 'AppShoppingCartPDFRequest']
**shop_order_id** | **string** | The order number in the shop. All characters are allowed except &lt; and &amp;. It is optional in case of query parameter finalize is true. In all other cases it is mandatory required. | [optional]
**total** | **int** | Total value of the shopping cart in euro cents. | [optional]
**create_manifest** | **bool** | The flag indicating whether a posting receipt should be created. | [optional]
**create_shipping_list** | **string** | Identifier of which type of shipping list is to be created is to be created: 0: No shipping list 1: Shipping list without addresses / delivery receipt only 2: Shipping list with addresses | [optional]
**dpi** | **string** |  | [optional]
**page_format_id** | **int** | The ID of the print format. All available formats can be identified by request /app/catalog?types&#x3D;PAGE_FORMATS | [optional]
**positions** | [**\kruegge82\DPIM\Model\AppShoppingCartPDFPosition[]**](AppShoppingCartPDFPosition.md) | List of PDF order items. At least one item has to be specified. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
