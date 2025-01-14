<?php
/**
 * Comment
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
 * Comment Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Comment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'comment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'envelope_id' => '?string',
        'hmac' => '?string',
        'id' => '?string',
        'mentions' => '?string[]',
        'read' => '?bool',
        'sent_by_email' => '?string',
        'sent_by_full_name' => '?string',
        'sent_by_image_id' => '?string',
        'sent_by_initials' => '?string',
        'sent_by_recipient_id' => '?string',
        'sent_by_user_id' => '?string',
        'signing_group_id' => '?string',
        'signing_group_name' => '?string',
        'subject' => '?string',
        'tab_id' => '?string',
        'text' => '?string',
        'thread_id' => '?string',
        'thread_originator_id' => '?string',
        'timestamp' => '?string',
        'time_stamp_formatted' => '?string',
        'visible_to' => '?string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'envelope_id' => null,
        'hmac' => null,
        'id' => null,
        'mentions' => null,
        'read' => null,
        'sent_by_email' => null,
        'sent_by_full_name' => null,
        'sent_by_image_id' => null,
        'sent_by_initials' => null,
        'sent_by_recipient_id' => null,
        'sent_by_user_id' => null,
        'signing_group_id' => null,
        'signing_group_name' => null,
        'subject' => null,
        'tab_id' => null,
        'text' => null,
        'thread_id' => null,
        'thread_originator_id' => null,
        'timestamp' => null,
        'time_stamp_formatted' => null,
        'visible_to' => null
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
        'envelope_id' => 'envelopeId',
        'hmac' => 'hmac',
        'id' => 'id',
        'mentions' => 'mentions',
        'read' => 'read',
        'sent_by_email' => 'sentByEmail',
        'sent_by_full_name' => 'sentByFullName',
        'sent_by_image_id' => 'sentByImageId',
        'sent_by_initials' => 'sentByInitials',
        'sent_by_recipient_id' => 'sentByRecipientId',
        'sent_by_user_id' => 'sentByUserId',
        'signing_group_id' => 'signingGroupId',
        'signing_group_name' => 'signingGroupName',
        'subject' => 'subject',
        'tab_id' => 'tabId',
        'text' => 'text',
        'thread_id' => 'threadId',
        'thread_originator_id' => 'threadOriginatorId',
        'timestamp' => 'timestamp',
        'time_stamp_formatted' => 'timeStampFormatted',
        'visible_to' => 'visibleTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'envelope_id' => 'setEnvelopeId',
        'hmac' => 'setHmac',
        'id' => 'setId',
        'mentions' => 'setMentions',
        'read' => 'setRead',
        'sent_by_email' => 'setSentByEmail',
        'sent_by_full_name' => 'setSentByFullName',
        'sent_by_image_id' => 'setSentByImageId',
        'sent_by_initials' => 'setSentByInitials',
        'sent_by_recipient_id' => 'setSentByRecipientId',
        'sent_by_user_id' => 'setSentByUserId',
        'signing_group_id' => 'setSigningGroupId',
        'signing_group_name' => 'setSigningGroupName',
        'subject' => 'setSubject',
        'tab_id' => 'setTabId',
        'text' => 'setText',
        'thread_id' => 'setThreadId',
        'thread_originator_id' => 'setThreadOriginatorId',
        'timestamp' => 'setTimestamp',
        'time_stamp_formatted' => 'setTimeStampFormatted',
        'visible_to' => 'setVisibleTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'envelope_id' => 'getEnvelopeId',
        'hmac' => 'getHmac',
        'id' => 'getId',
        'mentions' => 'getMentions',
        'read' => 'getRead',
        'sent_by_email' => 'getSentByEmail',
        'sent_by_full_name' => 'getSentByFullName',
        'sent_by_image_id' => 'getSentByImageId',
        'sent_by_initials' => 'getSentByInitials',
        'sent_by_recipient_id' => 'getSentByRecipientId',
        'sent_by_user_id' => 'getSentByUserId',
        'signing_group_id' => 'getSigningGroupId',
        'signing_group_name' => 'getSigningGroupName',
        'subject' => 'getSubject',
        'tab_id' => 'getTabId',
        'text' => 'getText',
        'thread_id' => 'getThreadId',
        'thread_originator_id' => 'getThreadOriginatorId',
        'timestamp' => 'getTimestamp',
        'time_stamp_formatted' => 'getTimeStampFormatted',
        'visible_to' => 'getVisibleTo'
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
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['hmac'] = isset($data['hmac']) ? $data['hmac'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mentions'] = isset($data['mentions']) ? $data['mentions'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['sent_by_email'] = isset($data['sent_by_email']) ? $data['sent_by_email'] : null;
        $this->container['sent_by_full_name'] = isset($data['sent_by_full_name']) ? $data['sent_by_full_name'] : null;
        $this->container['sent_by_image_id'] = isset($data['sent_by_image_id']) ? $data['sent_by_image_id'] : null;
        $this->container['sent_by_initials'] = isset($data['sent_by_initials']) ? $data['sent_by_initials'] : null;
        $this->container['sent_by_recipient_id'] = isset($data['sent_by_recipient_id']) ? $data['sent_by_recipient_id'] : null;
        $this->container['sent_by_user_id'] = isset($data['sent_by_user_id']) ? $data['sent_by_user_id'] : null;
        $this->container['signing_group_id'] = isset($data['signing_group_id']) ? $data['signing_group_id'] : null;
        $this->container['signing_group_name'] = isset($data['signing_group_name']) ? $data['signing_group_name'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['tab_id'] = isset($data['tab_id']) ? $data['tab_id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['thread_id'] = isset($data['thread_id']) ? $data['thread_id'] : null;
        $this->container['thread_originator_id'] = isset($data['thread_originator_id']) ? $data['thread_originator_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['time_stamp_formatted'] = isset($data['time_stamp_formatted']) ? $data['time_stamp_formatted'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
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
     * Gets envelope_id
     *
     * @return ?string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     *
     * @param ?string $envelope_id The envelope ID of the envelope status that failed to post.
     *
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets hmac
     *
     * @return ?string
     */
    public function getHmac()
    {
        return $this->container['hmac'];
    }

    /**
     * Sets hmac
     *
     * @param ?string $hmac 
     *
     * @return $this
     */
    public function setHmac($hmac)
    {
        $this->container['hmac'] = $hmac;

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
     * Gets mentions
     *
     * @return ?string[]
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param ?string[] $mentions 
     *
     * @return $this
     */
    public function setMentions($mentions)
    {
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets read
     *
     * @return ?bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param ?bool $read 
     *
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets sent_by_email
     *
     * @return ?string
     */
    public function getSentByEmail()
    {
        return $this->container['sent_by_email'];
    }

    /**
     * Sets sent_by_email
     *
     * @param ?string $sent_by_email 
     *
     * @return $this
     */
    public function setSentByEmail($sent_by_email)
    {
        $this->container['sent_by_email'] = $sent_by_email;

        return $this;
    }

    /**
     * Gets sent_by_full_name
     *
     * @return ?string
     */
    public function getSentByFullName()
    {
        return $this->container['sent_by_full_name'];
    }

    /**
     * Sets sent_by_full_name
     *
     * @param ?string $sent_by_full_name 
     *
     * @return $this
     */
    public function setSentByFullName($sent_by_full_name)
    {
        $this->container['sent_by_full_name'] = $sent_by_full_name;

        return $this;
    }

    /**
     * Gets sent_by_image_id
     *
     * @return ?string
     */
    public function getSentByImageId()
    {
        return $this->container['sent_by_image_id'];
    }

    /**
     * Sets sent_by_image_id
     *
     * @param ?string $sent_by_image_id 
     *
     * @return $this
     */
    public function setSentByImageId($sent_by_image_id)
    {
        $this->container['sent_by_image_id'] = $sent_by_image_id;

        return $this;
    }

    /**
     * Gets sent_by_initials
     *
     * @return ?string
     */
    public function getSentByInitials()
    {
        return $this->container['sent_by_initials'];
    }

    /**
     * Sets sent_by_initials
     *
     * @param ?string $sent_by_initials 
     *
     * @return $this
     */
    public function setSentByInitials($sent_by_initials)
    {
        $this->container['sent_by_initials'] = $sent_by_initials;

        return $this;
    }

    /**
     * Gets sent_by_recipient_id
     *
     * @return ?string
     */
    public function getSentByRecipientId()
    {
        return $this->container['sent_by_recipient_id'];
    }

    /**
     * Sets sent_by_recipient_id
     *
     * @param ?string $sent_by_recipient_id 
     *
     * @return $this
     */
    public function setSentByRecipientId($sent_by_recipient_id)
    {
        $this->container['sent_by_recipient_id'] = $sent_by_recipient_id;

        return $this;
    }

    /**
     * Gets sent_by_user_id
     *
     * @return ?string
     */
    public function getSentByUserId()
    {
        return $this->container['sent_by_user_id'];
    }

    /**
     * Sets sent_by_user_id
     *
     * @param ?string $sent_by_user_id 
     *
     * @return $this
     */
    public function setSentByUserId($sent_by_user_id)
    {
        $this->container['sent_by_user_id'] = $sent_by_user_id;

        return $this;
    }

    /**
     * Gets signing_group_id
     *
     * @return ?string
     */
    public function getSigningGroupId()
    {
        return $this->container['signing_group_id'];
    }

    /**
     * Sets signing_group_id
     *
     * @param ?string $signing_group_id When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @return $this
     */
    public function setSigningGroupId($signing_group_id)
    {
        $this->container['signing_group_id'] = $signing_group_id;

        return $this;
    }

    /**
     * Gets signing_group_name
     *
     * @return ?string
     */
    public function getSigningGroupName()
    {
        return $this->container['signing_group_name'];
    }

    /**
     * Sets signing_group_name
     *
     * @param ?string $signing_group_name The display name for the signing group.   Maximum Length: 100 characters.
     *
     * @return $this
     */
    public function setSigningGroupName($signing_group_name)
    {
        $this->container['signing_group_name'] = $signing_group_name;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return ?string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param ?string $subject 
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets tab_id
     *
     * @return ?string
     */
    public function getTabId()
    {
        return $this->container['tab_id'];
    }

    /**
     * Sets tab_id
     *
     * @param ?string $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @return $this
     */
    public function setTabId($tab_id)
    {
        $this->container['tab_id'] = $tab_id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return ?string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param ?string $text 
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets thread_id
     *
     * @return ?string
     */
    public function getThreadId()
    {
        return $this->container['thread_id'];
    }

    /**
     * Sets thread_id
     *
     * @param ?string $thread_id 
     *
     * @return $this
     */
    public function setThreadId($thread_id)
    {
        $this->container['thread_id'] = $thread_id;

        return $this;
    }

    /**
     * Gets thread_originator_id
     *
     * @return ?string
     */
    public function getThreadOriginatorId()
    {
        return $this->container['thread_originator_id'];
    }

    /**
     * Sets thread_originator_id
     *
     * @param ?string $thread_originator_id 
     *
     * @return $this
     */
    public function setThreadOriginatorId($thread_originator_id)
    {
        $this->container['thread_originator_id'] = $thread_originator_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return ?string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param ?string $timestamp 
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets time_stamp_formatted
     *
     * @return ?string
     */
    public function getTimeStampFormatted()
    {
        return $this->container['time_stamp_formatted'];
    }

    /**
     * Sets time_stamp_formatted
     *
     * @param ?string $time_stamp_formatted 
     *
     * @return $this
     */
    public function setTimeStampFormatted($time_stamp_formatted)
    {
        $this->container['time_stamp_formatted'] = $time_stamp_formatted;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return ?string[]
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param ?string[] $visible_to 
     *
     * @return $this
     */
    public function setVisibleTo($visible_to)
    {
        $this->container['visible_to'] = $visible_to;

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

