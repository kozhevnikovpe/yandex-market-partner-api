<?php
/**
 * AddOffersToArchiveErrorType
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
 * AddOffersToArchiveErrorType Class Doc Comment
 *
 * @category Class
 * @description Причина, по которой товар не удалось поместить в архив:  * &#x60;OFFER_HAS_STOCKS&#x60; — товар хранится на складе Маркета.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddOffersToArchiveErrorType
{
    /**
     * Possible values of this enum
     */
    public const OFFER_HAS_STOCKS = 'OFFER_HAS_STOCKS';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFER_HAS_STOCKS,
            self::UNKNOWN
        ];
    }
}


