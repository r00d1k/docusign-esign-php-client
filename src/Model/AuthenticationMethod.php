<?php
/**
 * AuthenticationMethod
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
 * AuthenticationMethod Class Doc Comment
 *
 * @category    Class
 * @description Contains information about the method used for authentication.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'authenticationMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_type' => '?string',
        'last_provider' => '?string',
        'last_timestamp' => '?string',
        'total_count' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_type' => null,
        'last_provider' => null,
        'last_timestamp' => null,
        'total_count' => null
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
        'authentication_type' => 'authenticationType',
        'last_provider' => 'lastProvider',
        'last_timestamp' => 'lastTimestamp',
        'total_count' => 'totalCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_type' => 'setAuthenticationType',
        'last_provider' => 'setLastProvider',
        'last_timestamp' => 'setLastTimestamp',
        'total_count' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_type' => 'getAuthenticationType',
        'last_provider' => 'getLastProvider',
        'last_timestamp' => 'getLastTimestamp',
        'total_count' => 'getTotalCount'
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
        $this->container['authentication_type'] = isset($data['authentication_type']) ? $data['authentication_type'] : null;
        $this->container['last_provider'] = isset($data['last_provider']) ? $data['last_provider'] : null;
        $this->container['last_timestamp'] = isset($data['last_timestamp']) ? $data['last_timestamp'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
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
     * Gets authentication_type
     *
     * @return ?string
     */
    public function getAuthenticationType()
    {
        return $this->container['authentication_type'];
    }

    /**
     * Sets authentication_type
     *
     * @param ?string $authentication_type Indicates the type of authentication. Valid values are: PhoneAuth, STAN, ISCheck, OFAC, AccessCode, AgeVerify, or SSOAuth.
     *
     * @return $this
     */
    public function setAuthenticationType($authentication_type)
    {
        $this->container['authentication_type'] = $authentication_type;

        return $this;
    }

    /**
     * Gets last_provider
     *
     * @return ?string
     */
    public function getLastProvider()
    {
        return $this->container['last_provider'];
    }

    /**
     * Sets last_provider
     *
     * @param ?string $last_provider The last provider that authenticated the user.
     *
     * @return $this
     */
    public function setLastProvider($last_provider)
    {
        $this->container['last_provider'] = $last_provider;

        return $this;
    }

    /**
     * Gets last_timestamp
     *
     * @return ?string
     */
    public function getLastTimestamp()
    {
        return $this->container['last_timestamp'];
    }

    /**
     * Sets last_timestamp
     *
     * @param ?string $last_timestamp The data and time the user last used the authentication method.
     *
     * @return $this
     */
    public function setLastTimestamp($last_timestamp)
    {
        $this->container['last_timestamp'] = $last_timestamp;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return ?string
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param ?string $total_count The number of times the authentication method was used.
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

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

