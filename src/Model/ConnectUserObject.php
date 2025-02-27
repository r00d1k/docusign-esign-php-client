<?php
/**
 * ConnectUserObject
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
 * ConnectUserObject Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectUserObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'connectUserObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'configurationtype' => '?string',
        'connect_id' => '?string',
        'enabled' => '?string',
        'has_access' => '?string',
        'sender_searchable_items' => '?string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'configurationtype' => null,
        'connect_id' => null,
        'enabled' => null,
        'has_access' => null,
        'sender_searchable_items' => null
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
        'configurationtype' => 'configurationtype',
        'connect_id' => 'connectId',
        'enabled' => 'enabled',
        'has_access' => 'hasAccess',
        'sender_searchable_items' => 'senderSearchableItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configurationtype' => 'setConfigurationtype',
        'connect_id' => 'setConnectId',
        'enabled' => 'setEnabled',
        'has_access' => 'setHasAccess',
        'sender_searchable_items' => 'setSenderSearchableItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configurationtype' => 'getConfigurationtype',
        'connect_id' => 'getConnectId',
        'enabled' => 'getEnabled',
        'has_access' => 'getHasAccess',
        'sender_searchable_items' => 'getSenderSearchableItems'
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
        $this->container['configurationtype'] = isset($data['configurationtype']) ? $data['configurationtype'] : null;
        $this->container['connect_id'] = isset($data['connect_id']) ? $data['connect_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['has_access'] = isset($data['has_access']) ? $data['has_access'] : null;
        $this->container['sender_searchable_items'] = isset($data['sender_searchable_items']) ? $data['sender_searchable_items'] : null;
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
     * Gets configurationtype
     *
     * @return ?string
     */
    public function getConfigurationtype()
    {
        return $this->container['configurationtype'];
    }

    /**
     * Sets configurationtype
     *
     * @param ?string $configurationtype If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @return $this
     */
    public function setConfigurationtype($configurationtype)
    {
        $this->container['configurationtype'] = $configurationtype;

        return $this;
    }

    /**
     * Gets connect_id
     *
     * @return ?string
     */
    public function getConnectId()
    {
        return $this->container['connect_id'];
    }

    /**
     * Sets connect_id
     *
     * @param ?string $connect_id 
     *
     * @return $this
     */
    public function setConnectId($connect_id)
    {
        $this->container['connect_id'] = $connect_id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return ?string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param ?string $enabled 
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets has_access
     *
     * @return ?string
     */
    public function getHasAccess()
    {
        return $this->container['has_access'];
    }

    /**
     * Sets has_access
     *
     * @param ?string $has_access 
     *
     * @return $this
     */
    public function setHasAccess($has_access)
    {
        $this->container['has_access'] = $has_access;

        return $this;
    }

    /**
     * Gets sender_searchable_items
     *
     * @return ?string[]
     */
    public function getSenderSearchableItems()
    {
        return $this->container['sender_searchable_items'];
    }

    /**
     * Sets sender_searchable_items
     *
     * @param ?string[] $sender_searchable_items 
     *
     * @return $this
     */
    public function setSenderSearchableItems($sender_searchable_items)
    {
        $this->container['sender_searchable_items'] = $sender_searchable_items;

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

