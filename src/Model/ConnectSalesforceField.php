<?php
/**
 * ConnectSalesforceField
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
 * ConnectSalesforceField Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConnectSalesforceField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'connectSalesforceField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ds_attribute' => '?string',
        'ds_link' => '?string',
        'ds_node' => '?string',
        'id' => '?string',
        'sf_field' => '?string',
        'sf_field_name' => '?string',
        'sf_folder' => '?string',
        'sf_locked_value' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ds_attribute' => null,
        'ds_link' => null,
        'ds_node' => null,
        'id' => null,
        'sf_field' => null,
        'sf_field_name' => null,
        'sf_folder' => null,
        'sf_locked_value' => null
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
        'ds_attribute' => 'dsAttribute',
        'ds_link' => 'dsLink',
        'ds_node' => 'dsNode',
        'id' => 'id',
        'sf_field' => 'sfField',
        'sf_field_name' => 'sfFieldName',
        'sf_folder' => 'sfFolder',
        'sf_locked_value' => 'sfLockedValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ds_attribute' => 'setDsAttribute',
        'ds_link' => 'setDsLink',
        'ds_node' => 'setDsNode',
        'id' => 'setId',
        'sf_field' => 'setSfField',
        'sf_field_name' => 'setSfFieldName',
        'sf_folder' => 'setSfFolder',
        'sf_locked_value' => 'setSfLockedValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ds_attribute' => 'getDsAttribute',
        'ds_link' => 'getDsLink',
        'ds_node' => 'getDsNode',
        'id' => 'getId',
        'sf_field' => 'getSfField',
        'sf_field_name' => 'getSfFieldName',
        'sf_folder' => 'getSfFolder',
        'sf_locked_value' => 'getSfLockedValue'
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
        $this->container['ds_attribute'] = isset($data['ds_attribute']) ? $data['ds_attribute'] : null;
        $this->container['ds_link'] = isset($data['ds_link']) ? $data['ds_link'] : null;
        $this->container['ds_node'] = isset($data['ds_node']) ? $data['ds_node'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sf_field'] = isset($data['sf_field']) ? $data['sf_field'] : null;
        $this->container['sf_field_name'] = isset($data['sf_field_name']) ? $data['sf_field_name'] : null;
        $this->container['sf_folder'] = isset($data['sf_folder']) ? $data['sf_folder'] : null;
        $this->container['sf_locked_value'] = isset($data['sf_locked_value']) ? $data['sf_locked_value'] : null;
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
     * Gets ds_attribute
     *
     * @return ?string
     */
    public function getDsAttribute()
    {
        return $this->container['ds_attribute'];
    }

    /**
     * Sets ds_attribute
     *
     * @param ?string $ds_attribute 
     *
     * @return $this
     */
    public function setDsAttribute($ds_attribute)
    {
        $this->container['ds_attribute'] = $ds_attribute;

        return $this;
    }

    /**
     * Gets ds_link
     *
     * @return ?string
     */
    public function getDsLink()
    {
        return $this->container['ds_link'];
    }

    /**
     * Sets ds_link
     *
     * @param ?string $ds_link 
     *
     * @return $this
     */
    public function setDsLink($ds_link)
    {
        $this->container['ds_link'] = $ds_link;

        return $this;
    }

    /**
     * Gets ds_node
     *
     * @return ?string
     */
    public function getDsNode()
    {
        return $this->container['ds_node'];
    }

    /**
     * Sets ds_node
     *
     * @param ?string $ds_node 
     *
     * @return $this
     */
    public function setDsNode($ds_node)
    {
        $this->container['ds_node'] = $ds_node;

        return $this;
    }

    /**
     * Gets id
     *
     * @return ?string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param ?string $id 
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sf_field
     *
     * @return ?string
     */
    public function getSfField()
    {
        return $this->container['sf_field'];
    }

    /**
     * Sets sf_field
     *
     * @param ?string $sf_field 
     *
     * @return $this
     */
    public function setSfField($sf_field)
    {
        $this->container['sf_field'] = $sf_field;

        return $this;
    }

    /**
     * Gets sf_field_name
     *
     * @return ?string
     */
    public function getSfFieldName()
    {
        return $this->container['sf_field_name'];
    }

    /**
     * Sets sf_field_name
     *
     * @param ?string $sf_field_name 
     *
     * @return $this
     */
    public function setSfFieldName($sf_field_name)
    {
        $this->container['sf_field_name'] = $sf_field_name;

        return $this;
    }

    /**
     * Gets sf_folder
     *
     * @return ?string
     */
    public function getSfFolder()
    {
        return $this->container['sf_folder'];
    }

    /**
     * Sets sf_folder
     *
     * @param ?string $sf_folder 
     *
     * @return $this
     */
    public function setSfFolder($sf_folder)
    {
        $this->container['sf_folder'] = $sf_folder;

        return $this;
    }

    /**
     * Gets sf_locked_value
     *
     * @return ?string
     */
    public function getSfLockedValue()
    {
        return $this->container['sf_locked_value'];
    }

    /**
     * Sets sf_locked_value
     *
     * @param ?string $sf_locked_value 
     *
     * @return $this
     */
    public function setSfLockedValue($sf_locked_value)
    {
        $this->container['sf_locked_value'] = $sf_locked_value;

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

