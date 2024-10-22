<?php
/**
 * BriefOrderItemDTO
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BriefOrderItemDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о маркированном товаре.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BriefOrderItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BriefOrderItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'vat' => '\OpenAPI\Client\Model\OrderVatType',
        'count' => 'int',
        'price' => 'float',
        'offer_name' => 'string',
        'offer_id' => 'string',
        'instances' => '\OpenAPI\Client\Model\OrderItemInstanceDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'vat' => null,
        'count' => 'int32',
        'price' => null,
        'offer_name' => null,
        'offer_id' => null,
        'instances' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'vat' => false,
        'count' => false,
        'price' => false,
        'offer_name' => false,
        'offer_id' => false,
        'instances' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'vat' => 'vat',
        'count' => 'count',
        'price' => 'price',
        'offer_name' => 'offerName',
        'offer_id' => 'offerId',
        'instances' => 'instances'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'vat' => 'setVat',
        'count' => 'setCount',
        'price' => 'setPrice',
        'offer_name' => 'setOfferName',
        'offer_id' => 'setOfferId',
        'instances' => 'setInstances'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'vat' => 'getVat',
        'count' => 'getCount',
        'price' => 'getPrice',
        'offer_name' => 'getOfferName',
        'offer_id' => 'getOfferId',
        'instances' => 'getInstances'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('offer_name', $data ?? [], null);
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('instances', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['offer_id']) && (mb_strlen($this->container['offer_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['offer_id']) && (mb_strlen($this->container['offer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['offer_id']) && !preg_match("/^[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", $this->container['offer_id'])) {
            $invalidProperties[] = "invalid value for 'offer_id', must be conform to the pattern /^[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор товара в заказе.  Позволяет идентифицировать товар в рамках данного заказа.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return \OpenAPI\Client\Model\OrderVatType|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param \OpenAPI\Client\Model\OrderVatType|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Количество единиц товара.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Цена на товар. Указана в той валюте, которая была задана в каталоге. Разделитель целой и дробной части — точка.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets offer_name
     *
     * @return string|null
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string|null $offer_name Название товара.
     *
     * @return self
     */
    public function setOfferName($offer_name)
    {
        if (is_null($offer_name)) {
            throw new \InvalidArgumentException('non-nullable offer_name cannot be null');
        }
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string|null $offer_id Ваш SKU — идентификатор товара в вашей системе.  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        if ((mb_strlen($offer_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling BriefOrderItemDTO., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($offer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling BriefOrderItemDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/", ObjectSerializer::toString($offer_id)))) {
            throw new \InvalidArgumentException("invalid value for \$offer_id when calling BriefOrderItemDTO., must conform to the pattern /^[^\\x00-\\x08\\x0A-\\x1f\\x7f]{1,255}$/.");
        }

        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets instances
     *
     * @return \OpenAPI\Client\Model\OrderItemInstanceDTO[]|null
     */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
     * Sets instances
     *
     * @param \OpenAPI\Client\Model\OrderItemInstanceDTO[]|null $instances Переданные вами коды маркировки.
     *
     * @return self
     */
    public function setInstances($instances)
    {
        if (is_null($instances)) {
            array_push($this->openAPINullablesSetToNull, 'instances');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('instances', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['instances'] = $instances;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


