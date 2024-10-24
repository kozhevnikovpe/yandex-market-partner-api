<?php
/**
 * ReturnInstanceStockType
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
 * ReturnInstanceStockType Class Doc Comment
 *
 * @category Class
 * @description Тип остатка на складе.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnInstanceStockType
{
    /**
     * Possible values of this enum
     */
    public const FIT = 'FIT';

    public const DEFECT = 'DEFECT';

    public const ANOMALY = 'ANOMALY';

    public const SURPLUS = 'SURPLUS';

    public const EXPIRED = 'EXPIRED';

    public const MISGRADING = 'MISGRADING';

    public const UNDEFINED = 'UNDEFINED';

    public const INCORRECT_IMEI = 'INCORRECT_IMEI';

    public const INCORRECT_SERIAL_NUMBER = 'INCORRECT_SERIAL_NUMBER';

    public const INCORRECT_CIS = 'INCORRECT_CIS';

    public const PART_MISSING = 'PART_MISSING';

    public const NON_COMPLIENT = 'NON_COMPLIENT';

    public const NOT_ACCEPTABLE = 'NOT_ACCEPTABLE';

    public const SERVICE = 'SERVICE';

    public const MARKDOWN = 'MARKDOWN';

    public const DEMO = 'DEMO';

    public const REPAIR = 'REPAIR';

    public const FIRMWARE = 'FIRMWARE';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIT,
            self::DEFECT,
            self::ANOMALY,
            self::SURPLUS,
            self::EXPIRED,
            self::MISGRADING,
            self::UNDEFINED,
            self::INCORRECT_IMEI,
            self::INCORRECT_SERIAL_NUMBER,
            self::INCORRECT_CIS,
            self::PART_MISSING,
            self::NON_COMPLIENT,
            self::NOT_ACCEPTABLE,
            self::SERVICE,
            self::MARKDOWN,
            self::DEMO,
            self::REPAIR,
            self::FIRMWARE,
            self::UNKNOWN
        ];
    }
}


