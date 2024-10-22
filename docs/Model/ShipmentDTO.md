# # ShipmentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор отгрузки. |
**plan_interval_from** | **\DateTime** | Начало планового интервала отгрузки.  Формат даты: ISO 8601 со смещением относительно UTC. |
**plan_interval_to** | **\DateTime** | Конец планового интервала отгрузки.  Формат даты: ISO 8601 со смещением относительно UTC. |
**shipment_type** | [**\OpenAPI\Client\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**warehouse** | [**\OpenAPI\Client\Model\PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional]
**warehouse_to** | [**\OpenAPI\Client\Model\PartnerShipmentWarehouseDTO**](PartnerShipmentWarehouseDTO.md) |  | [optional]
**external_id** | **string** | Идентификатор отгрузки в вашей системе. Если вы еще не передавали идентификатор, вернется идентификатор из параметра &#x60;id&#x60;. | [optional]
**delivery_service** | [**\OpenAPI\Client\Model\DeliveryServiceDTO**](DeliveryServiceDTO.md) |  | [optional]
**pallets_count** | [**\OpenAPI\Client\Model\PalletsCountDTO**](PalletsCountDTO.md) |  | [optional]
**order_ids** | **int[]** | Идентификаторы заказов в отгрузке. |
**draft_count** | **int** | Количество заказов, которое Маркет запланировал к отгрузке. |
**planned_count** | **int** | Количество заказов, которое Маркет подтвердил к отгрузке. |
**fact_count** | **int** | Количество заказов, принятых в сортировочном центре или пункте приема. |
**current_status** | [**\OpenAPI\Client\Model\ShipmentStatusChangeDTO**](ShipmentStatusChangeDTO.md) |  | [optional]
**available_actions** | [**\OpenAPI\Client\Model\ShipmentActionType[]**](ShipmentActionType.md) | Доступные действия над отгрузкой. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
