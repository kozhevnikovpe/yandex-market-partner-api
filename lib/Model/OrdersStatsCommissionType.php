<?php
/**
 * OrdersStatsCommissionType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrdersStatsCommissionType Class Doc Comment
 *
 * @category Class
 * @description Услуга:  * &#x60;FEE&#x60; — размещение товара на Маркете. * &#x60;FULFILLMENT&#x60; — складская обработка. Не возвращается с 1 января 2024 года. * &#x60;LOYALTY_PARTICIPATION_FEE&#x60; — участие в программе лояльности и отзывы за баллы. * &#x60;AUCTION_PROMOTION&#x60; — буст продаж с оплатой за продажи. * &#x60;INSTALLMENT&#x60; — рассрочка. Не возвращается с 24 февраля 2022 года. * &#x60;DELIVERY_TO_CUSTOMER&#x60; — доставка покупателю (FBY, FBS). Для DBS и Экспресс — если заказ возвращается через логистику Маркета. * &#x60;EXPRESS_DELIVERY_TO_CUSTOMER&#x60; — экспресс-доставка покупателю (Экспресс). * &#x60;AGENCY&#x60; — прием платежа покупателя. * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя. * &#x60;RETURNED_ORDERS_STORAGE&#x60; — хранение невыкупов и возвратов (FBS). Для DBS и Экспресс — если заказ возвращается через логистику Маркета. * &#x60;SORTING&#x60; — обработка заказа (FBS). * &#x60;INTAKE_SORTING&#x60; — организация забора заказов со склада продавца (FBS). * &#x60;RETURN_PROCESSING&#x60; — обработка заказов на складе (FBS). Для DBS и Экспресс — если заказ возвращается через логистику Маркета. * &#x60;ILLIQUID_GOODS_SALE&#x60; — вознаграждение за продажу невывезенных товаров.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersStatsCommissionType
{
    /**
     * Possible values of this enum
     */
    public const FEE = 'FEE';

    public const FULFILLMENT = 'FULFILLMENT';

    public const LOYALTY_PARTICIPATION_FEE = 'LOYALTY_PARTICIPATION_FEE';

    public const AUCTION_PROMOTION = 'AUCTION_PROMOTION';

    public const INSTALLMENT = 'INSTALLMENT';

    public const DELIVERY_TO_CUSTOMER = 'DELIVERY_TO_CUSTOMER';

    public const EXPRESS_DELIVERY_TO_CUSTOMER = 'EXPRESS_DELIVERY_TO_CUSTOMER';

    public const AGENCY = 'AGENCY';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const RETURNED_ORDERS_STORAGE = 'RETURNED_ORDERS_STORAGE';

    public const SORTING = 'SORTING';

    public const INTAKE_SORTING = 'INTAKE_SORTING';

    public const RETURN_PROCESSING = 'RETURN_PROCESSING';

    public const ILLIQUID_GOODS_SALE = 'ILLIQUID_GOODS_SALE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FEE,
            self::FULFILLMENT,
            self::LOYALTY_PARTICIPATION_FEE,
            self::AUCTION_PROMOTION,
            self::INSTALLMENT,
            self::DELIVERY_TO_CUSTOMER,
            self::EXPRESS_DELIVERY_TO_CUSTOMER,
            self::AGENCY,
            self::PAYMENT_TRANSFER,
            self::RETURNED_ORDERS_STORAGE,
            self::SORTING,
            self::INTAKE_SORTING,
            self::RETURN_PROCESSING,
            self::ILLIQUID_GOODS_SALE
        ];
    }
}

