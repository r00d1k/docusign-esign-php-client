<?php
/**
 * DirectDebitProcessorInformation
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
 * DirectDebitProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DirectDebitProcessorInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'directDebitProcessorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_branch_code' => '?string',
        'bank_check_digit' => '?string',
        'bank_code' => '?string',
        'bank_name' => '?string',
        'bank_transfer_account_name' => '?string',
        'bank_transfer_account_number' => '?string',
        'bank_transfer_type' => '?string',
        'country' => '?string',
        'email' => '?string',
        'first_name' => '?string',
        'i_ban' => '?string',
        'last_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_branch_code' => null,
        'bank_check_digit' => null,
        'bank_code' => null,
        'bank_name' => null,
        'bank_transfer_account_name' => null,
        'bank_transfer_account_number' => null,
        'bank_transfer_type' => null,
        'country' => null,
        'email' => null,
        'first_name' => null,
        'i_ban' => null,
        'last_name' => null
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
        'bank_branch_code' => 'bankBranchCode',
        'bank_check_digit' => 'bankCheckDigit',
        'bank_code' => 'bankCode',
        'bank_name' => 'bankName',
        'bank_transfer_account_name' => 'bankTransferAccountName',
        'bank_transfer_account_number' => 'bankTransferAccountNumber',
        'bank_transfer_type' => 'bankTransferType',
        'country' => 'country',
        'email' => 'email',
        'first_name' => 'firstName',
        'i_ban' => 'iBAN',
        'last_name' => 'lastName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_branch_code' => 'setBankBranchCode',
        'bank_check_digit' => 'setBankCheckDigit',
        'bank_code' => 'setBankCode',
        'bank_name' => 'setBankName',
        'bank_transfer_account_name' => 'setBankTransferAccountName',
        'bank_transfer_account_number' => 'setBankTransferAccountNumber',
        'bank_transfer_type' => 'setBankTransferType',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'i_ban' => 'setIBan',
        'last_name' => 'setLastName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_branch_code' => 'getBankBranchCode',
        'bank_check_digit' => 'getBankCheckDigit',
        'bank_code' => 'getBankCode',
        'bank_name' => 'getBankName',
        'bank_transfer_account_name' => 'getBankTransferAccountName',
        'bank_transfer_account_number' => 'getBankTransferAccountNumber',
        'bank_transfer_type' => 'getBankTransferType',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'i_ban' => 'getIBan',
        'last_name' => 'getLastName'
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
        $this->container['bank_branch_code'] = isset($data['bank_branch_code']) ? $data['bank_branch_code'] : null;
        $this->container['bank_check_digit'] = isset($data['bank_check_digit']) ? $data['bank_check_digit'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_transfer_account_name'] = isset($data['bank_transfer_account_name']) ? $data['bank_transfer_account_name'] : null;
        $this->container['bank_transfer_account_number'] = isset($data['bank_transfer_account_number']) ? $data['bank_transfer_account_number'] : null;
        $this->container['bank_transfer_type'] = isset($data['bank_transfer_type']) ? $data['bank_transfer_type'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['i_ban'] = isset($data['i_ban']) ? $data['i_ban'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
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
     * Gets bank_branch_code
     *
     * @return ?string
     */
    public function getBankBranchCode()
    {
        return $this->container['bank_branch_code'];
    }

    /**
     * Sets bank_branch_code
     *
     * @param ?string $bank_branch_code 
     *
     * @return $this
     */
    public function setBankBranchCode($bank_branch_code)
    {
        $this->container['bank_branch_code'] = $bank_branch_code;

        return $this;
    }

    /**
     * Gets bank_check_digit
     *
     * @return ?string
     */
    public function getBankCheckDigit()
    {
        return $this->container['bank_check_digit'];
    }

    /**
     * Sets bank_check_digit
     *
     * @param ?string $bank_check_digit 
     *
     * @return $this
     */
    public function setBankCheckDigit($bank_check_digit)
    {
        $this->container['bank_check_digit'] = $bank_check_digit;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return ?string
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param ?string $bank_code 
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return ?string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param ?string $bank_name 
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_transfer_account_name
     *
     * @return ?string
     */
    public function getBankTransferAccountName()
    {
        return $this->container['bank_transfer_account_name'];
    }

    /**
     * Sets bank_transfer_account_name
     *
     * @param ?string $bank_transfer_account_name 
     *
     * @return $this
     */
    public function setBankTransferAccountName($bank_transfer_account_name)
    {
        $this->container['bank_transfer_account_name'] = $bank_transfer_account_name;

        return $this;
    }

    /**
     * Gets bank_transfer_account_number
     *
     * @return ?string
     */
    public function getBankTransferAccountNumber()
    {
        return $this->container['bank_transfer_account_number'];
    }

    /**
     * Sets bank_transfer_account_number
     *
     * @param ?string $bank_transfer_account_number 
     *
     * @return $this
     */
    public function setBankTransferAccountNumber($bank_transfer_account_number)
    {
        $this->container['bank_transfer_account_number'] = $bank_transfer_account_number;

        return $this;
    }

    /**
     * Gets bank_transfer_type
     *
     * @return ?string
     */
    public function getBankTransferType()
    {
        return $this->container['bank_transfer_type'];
    }

    /**
     * Sets bank_transfer_type
     *
     * @param ?string $bank_transfer_type 
     *
     * @return $this
     */
    public function setBankTransferType($bank_transfer_type)
    {
        $this->container['bank_transfer_type'] = $bank_transfer_type;

        return $this;
    }

    /**
     * Gets country
     *
     * @return ?string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param ?string $country Specifies the country associated with the address.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return ?string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param ?string $first_name The user's first name.  Maximum Length: 50 characters.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets i_ban
     *
     * @return ?string
     */
    public function getIBan()
    {
        return $this->container['i_ban'];
    }

    /**
     * Sets i_ban
     *
     * @param ?string $i_ban 
     *
     * @return $this
     */
    public function setIBan($i_ban)
    {
        $this->container['i_ban'] = $i_ban;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return ?string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param ?string $last_name 
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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

