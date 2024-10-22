# # ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор возврата. |
**order_id** | **int** | Номер заказа. |
**creation_date** | **\DateTime** | Дата создания возврата клиентом.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**update_date** | **\DateTime** | Дата обновления возврата.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**refund_status** | [**\OpenAPI\Client\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**logistic_pickup_point** | [**\OpenAPI\Client\Model\LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional]
**shipment_recipient_type** | [**\OpenAPI\Client\Model\RecipientType**](RecipientType.md) |  | [optional]
**shipment_status** | [**\OpenAPI\Client\Model\ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional]
**refund_amount** | **int** | Сумма возврата. | [optional]
**items** | [**\OpenAPI\Client\Model\ReturnItemDTO[]**](ReturnItemDTO.md) | Список товаров в возврате. |
**return_type** | [**\OpenAPI\Client\Model\ReturnType**](ReturnType.md) |  |
**fast_return** | **bool** | Используется ли опция **Быстрый возврат денег за дешевый брак**. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
