<?php
/**
 * FeedIndexLogsErrorType
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
 * FeedIndexLogsErrorType Class Doc Comment
 *
 * @category Class
 * @description Тип ошибки индексации прайс-листа.  Возможные значения:  * &#x60;DOWNLOAD_ERROR&#x60; — ошибка загрузки прайс-листа. Например, проблема с DNS-сервером или обрыв интернет-соединения.    Проблема описана в параметре &#x60;description&#x60;.  * &#x60;DOWNLOAD_HTTP_ERROR&#x60; — Маркет передал запрос на получение прайс-листа и получил в ответ HTTP-код, отличный от 2xx.    HTTP-код выведен в параметре &#x60;httpStatusCode&#x60;.  * &#x60;PARSE_ERROR&#x60; — ошибка при проверке прайс-листа, не связанная с форматом YML. Например, прайс-лист пустой или его не удалось разархивировать.  * &#x60;PARSE_XML_ERROR&#x60; — несоответствие техническим требованиям формата YML. Например, элементы и их значения описаны некорректно.  * &#x60;TOO_MANY_REJECTED_OFFERS&#x60; — более чем в половине предложений из прайс-листа найдены ошибки. Все предложения из прайс-листа не будут опубликованы на Маркете.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedIndexLogsErrorType
{
    /**
     * Possible values of this enum
     */
    public const DOWNLOAD_ERROR = 'DOWNLOAD_ERROR';

    public const DOWNLOAD_HTTP_ERROR = 'DOWNLOAD_HTTP_ERROR';

    public const PARSE_ERROR = 'PARSE_ERROR';

    public const PARSE_XML_ERROR = 'PARSE_XML_ERROR';

    public const TOO_MANY_REJECTED_OFFERS = 'TOO_MANY_REJECTED_OFFERS';

    public const NOT_INDEXED = 'NOT_INDEXED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOWNLOAD_ERROR,
            self::DOWNLOAD_HTTP_ERROR,
            self::PARSE_ERROR,
            self::PARSE_XML_ERROR,
            self::TOO_MANY_REJECTED_OFFERS,
            self::NOT_INDEXED
        ];
    }
}


