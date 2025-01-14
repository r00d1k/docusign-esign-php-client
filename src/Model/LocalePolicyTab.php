<?php
/**
 * LocalePolicyTab
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * LocalePolicyTab Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocalePolicyTab implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'localePolicyTab';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_format' => '?string',
        'calendar_type' => '?string',
        'culture_name' => '?string',
        'currency_code' => '?string',
        'currency_negative_format' => '?string',
        'currency_positive_format' => '?string',
        'custom_date_format' => '?string',
        'custom_time_format' => '?string',
        'date_format' => '?string',
        'initial_format' => '?string',
        'name_format' => '?string',
        'time_format' => '?string',
        'time_zone' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_format' => null,
        'calendar_type' => null,
        'culture_name' => null,
        'currency_code' => null,
        'currency_negative_format' => null,
        'currency_positive_format' => null,
        'custom_date_format' => null,
        'custom_time_format' => null,
        'date_format' => null,
        'initial_format' => null,
        'name_format' => null,
        'time_format' => null,
        'time_zone' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_format' => 'addressFormat',
        'calendar_type' => 'calendarType',
        'culture_name' => 'cultureName',
        'currency_code' => 'currencyCode',
        'currency_negative_format' => 'currencyNegativeFormat',
        'currency_positive_format' => 'currencyPositiveFormat',
        'custom_date_format' => 'customDateFormat',
        'custom_time_format' => 'customTimeFormat',
        'date_format' => 'dateFormat',
        'initial_format' => 'initialFormat',
        'name_format' => 'nameFormat',
        'time_format' => 'timeFormat',
        'time_zone' => 'timeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_format' => 'setAddressFormat',
        'calendar_type' => 'setCalendarType',
        'culture_name' => 'setCultureName',
        'currency_code' => 'setCurrencyCode',
        'currency_negative_format' => 'setCurrencyNegativeFormat',
        'currency_positive_format' => 'setCurrencyPositiveFormat',
        'custom_date_format' => 'setCustomDateFormat',
        'custom_time_format' => 'setCustomTimeFormat',
        'date_format' => 'setDateFormat',
        'initial_format' => 'setInitialFormat',
        'name_format' => 'setNameFormat',
        'time_format' => 'setTimeFormat',
        'time_zone' => 'setTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_format' => 'getAddressFormat',
        'calendar_type' => 'getCalendarType',
        'culture_name' => 'getCultureName',
        'currency_code' => 'getCurrencyCode',
        'currency_negative_format' => 'getCurrencyNegativeFormat',
        'currency_positive_format' => 'getCurrencyPositiveFormat',
        'custom_date_format' => 'getCustomDateFormat',
        'custom_time_format' => 'getCustomTimeFormat',
        'date_format' => 'getDateFormat',
        'initial_format' => 'getInitialFormat',
        'name_format' => 'getNameFormat',
        'time_format' => 'getTimeFormat',
        'time_zone' => 'getTimeZone'
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
        return self::$swaggerModelName;
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
        $this->container['address_format'] = isset($data['address_format']) ? $data['address_format'] : null;
        $this->container['calendar_type'] = isset($data['calendar_type']) ? $data['calendar_type'] : null;
        $this->container['culture_name'] = isset($data['culture_name']) ? $data['culture_name'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_negative_format'] = isset($data['currency_negative_format']) ? $data['currency_negative_format'] : null;
        $this->container['currency_positive_format'] = isset($data['currency_positive_format']) ? $data['currency_positive_format'] : null;
        $this->container['custom_date_format'] = isset($data['custom_date_format']) ? $data['custom_date_format'] : null;
        $this->container['custom_time_format'] = isset($data['custom_time_format']) ? $data['custom_time_format'] : null;
        $this->container['date_format'] = isset($data['date_format']) ? $data['date_format'] : null;
        $this->container['initial_format'] = isset($data['initial_format']) ? $data['initial_format'] : null;
        $this->container['name_format'] = isset($data['name_format']) ? $data['name_format'] : null;
        $this->container['time_format'] = isset($data['time_format']) ? $data['time_format'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets address_format
     *
     * @return ?string
     */
    public function getAddressFormat()
    {
        return $this->container['address_format'];
    }

    /**
     * Sets address_format
     *
     * @param ?string $address_format 
     *
     * @return $this
     */
    public function setAddressFormat($address_format)
    {
        $this->container['address_format'] = $address_format;

        return $this;
    }

    /**
     * Gets calendar_type
     *
     * @return ?string
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /**
     * Sets calendar_type
     *
     * @param ?string $calendar_type 
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {
        $this->container['calendar_type'] = $calendar_type;

        return $this;
    }

    /**
     * Gets culture_name
     *
     * @return ?string
     */
    public function getCultureName()
    {
        return $this->container['culture_name'];
    }

    /**
     * Sets culture_name
     *
     * @param ?string $culture_name 
     *
     * @return $this
     */
    public function setCultureName($culture_name)
    {
        $this->container['culture_name'] = $culture_name;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return ?string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param ?string $currency_code 
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_negative_format
     *
     * @return ?string
     */
    public function getCurrencyNegativeFormat()
    {
        return $this->container['currency_negative_format'];
    }

    /**
     * Sets currency_negative_format
     *
     * @param ?string $currency_negative_format 
     *
     * @return $this
     */
    public function setCurrencyNegativeFormat($currency_negative_format)
    {
        $this->container['currency_negative_format'] = $currency_negative_format;

        return $this;
    }

    /**
     * Gets currency_positive_format
     *
     * @return ?string
     */
    public function getCurrencyPositiveFormat()
    {
        return $this->container['currency_positive_format'];
    }

    /**
     * Sets currency_positive_format
     *
     * @param ?string $currency_positive_format 
     *
     * @return $this
     */
    public function setCurrencyPositiveFormat($currency_positive_format)
    {
        $this->container['currency_positive_format'] = $currency_positive_format;

        return $this;
    }

    /**
     * Gets custom_date_format
     *
     * @return ?string
     */
    public function getCustomDateFormat()
    {
        return $this->container['custom_date_format'];
    }

    /**
     * Sets custom_date_format
     *
     * @param ?string $custom_date_format 
     *
     * @return $this
     */
    public function setCustomDateFormat($custom_date_format)
    {
        $this->container['custom_date_format'] = $custom_date_format;

        return $this;
    }

    /**
     * Gets custom_time_format
     *
     * @return ?string
     */
    public function getCustomTimeFormat()
    {
        return $this->container['custom_time_format'];
    }

    /**
     * Sets custom_time_format
     *
     * @param ?string $custom_time_format 
     *
     * @return $this
     */
    public function setCustomTimeFormat($custom_time_format)
    {
        $this->container['custom_time_format'] = $custom_time_format;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return ?string
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param ?string $date_format 
     *
     * @return $this
     */
    public function setDateFormat($date_format)
    {
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets initial_format
     *
     * @return ?string
     */
    public function getInitialFormat()
    {
        return $this->container['initial_format'];
    }

    /**
     * Sets initial_format
     *
     * @param ?string $initial_format 
     *
     * @return $this
     */
    public function setInitialFormat($initial_format)
    {
        $this->container['initial_format'] = $initial_format;

        return $this;
    }

    /**
     * Gets name_format
     *
     * @return ?string
     */
    public function getNameFormat()
    {
        return $this->container['name_format'];
    }

    /**
     * Sets name_format
     *
     * @param ?string $name_format 
     *
     * @return $this
     */
    public function setNameFormat($name_format)
    {
        $this->container['name_format'] = $name_format;

        return $this;
    }

    /**
     * Gets time_format
     *
     * @return ?string
     */
    public function getTimeFormat()
    {
        return $this->container['time_format'];
    }

    /**
     * Sets time_format
     *
     * @param ?string $time_format 
     *
     * @return $this
     */
    public function setTimeFormat($time_format)
    {
        $this->container['time_format'] = $time_format;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return ?string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param ?string $time_zone 
     *
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

