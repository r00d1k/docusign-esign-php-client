<?php
/**
 * WorkspaceItem
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
 * WorkspaceItem Class Doc Comment
 *
 * @category    Class
 * @description A workspaceItem (file type only) representing the file. This property is only returned in response to file specific GET call.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WorkspaceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'workspaceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'caller_authorization' => '\DocuSign\eSign\Model\WorkspaceUserAuthorization',
        'content_type' => '?string',
        'created' => '?string',
        'created_by_id' => '?string',
        'created_by_information' => '\DocuSign\eSign\Model\WorkspaceUser',
        'extension' => '?string',
        'file_size' => '?string',
        'file_uri' => '?string',
        'id' => '?string',
        'is_public' => '?string',
        'last_modified' => '?string',
        'last_modified_by_id' => '?string',
        'last_modified_by_information' => '\DocuSign\eSign\Model\WorkspaceUser',
        'name' => '?string',
        'page_count' => '?string',
        'parent_folder_id' => '?string',
        'parent_folder_uri' => '?string',
        'sha256' => '?string',
        'thumb_height' => '?string',
        'thumbnail' => '\DocuSign\eSign\Model\Page',
        'thumb_width' => '?string',
        'type' => '?string',
        'uri' => '?string',
        'user_authorization' => '\DocuSign\eSign\Model\WorkspaceUserAuthorization'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'caller_authorization' => null,
        'content_type' => null,
        'created' => null,
        'created_by_id' => null,
        'created_by_information' => null,
        'extension' => null,
        'file_size' => null,
        'file_uri' => null,
        'id' => null,
        'is_public' => null,
        'last_modified' => null,
        'last_modified_by_id' => null,
        'last_modified_by_information' => null,
        'name' => null,
        'page_count' => null,
        'parent_folder_id' => null,
        'parent_folder_uri' => null,
        'sha256' => null,
        'thumb_height' => null,
        'thumbnail' => null,
        'thumb_width' => null,
        'type' => null,
        'uri' => null,
        'user_authorization' => null
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
        'caller_authorization' => 'callerAuthorization',
        'content_type' => 'contentType',
        'created' => 'created',
        'created_by_id' => 'createdById',
        'created_by_information' => 'createdByInformation',
        'extension' => 'extension',
        'file_size' => 'fileSize',
        'file_uri' => 'fileUri',
        'id' => 'id',
        'is_public' => 'isPublic',
        'last_modified' => 'lastModified',
        'last_modified_by_id' => 'lastModifiedById',
        'last_modified_by_information' => 'lastModifiedByInformation',
        'name' => 'name',
        'page_count' => 'pageCount',
        'parent_folder_id' => 'parentFolderId',
        'parent_folder_uri' => 'parentFolderUri',
        'sha256' => 'sha256',
        'thumb_height' => 'thumbHeight',
        'thumbnail' => 'thumbnail',
        'thumb_width' => 'thumbWidth',
        'type' => 'type',
        'uri' => 'uri',
        'user_authorization' => 'userAuthorization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'caller_authorization' => 'setCallerAuthorization',
        'content_type' => 'setContentType',
        'created' => 'setCreated',
        'created_by_id' => 'setCreatedById',
        'created_by_information' => 'setCreatedByInformation',
        'extension' => 'setExtension',
        'file_size' => 'setFileSize',
        'file_uri' => 'setFileUri',
        'id' => 'setId',
        'is_public' => 'setIsPublic',
        'last_modified' => 'setLastModified',
        'last_modified_by_id' => 'setLastModifiedById',
        'last_modified_by_information' => 'setLastModifiedByInformation',
        'name' => 'setName',
        'page_count' => 'setPageCount',
        'parent_folder_id' => 'setParentFolderId',
        'parent_folder_uri' => 'setParentFolderUri',
        'sha256' => 'setSha256',
        'thumb_height' => 'setThumbHeight',
        'thumbnail' => 'setThumbnail',
        'thumb_width' => 'setThumbWidth',
        'type' => 'setType',
        'uri' => 'setUri',
        'user_authorization' => 'setUserAuthorization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'caller_authorization' => 'getCallerAuthorization',
        'content_type' => 'getContentType',
        'created' => 'getCreated',
        'created_by_id' => 'getCreatedById',
        'created_by_information' => 'getCreatedByInformation',
        'extension' => 'getExtension',
        'file_size' => 'getFileSize',
        'file_uri' => 'getFileUri',
        'id' => 'getId',
        'is_public' => 'getIsPublic',
        'last_modified' => 'getLastModified',
        'last_modified_by_id' => 'getLastModifiedById',
        'last_modified_by_information' => 'getLastModifiedByInformation',
        'name' => 'getName',
        'page_count' => 'getPageCount',
        'parent_folder_id' => 'getParentFolderId',
        'parent_folder_uri' => 'getParentFolderUri',
        'sha256' => 'getSha256',
        'thumb_height' => 'getThumbHeight',
        'thumbnail' => 'getThumbnail',
        'thumb_width' => 'getThumbWidth',
        'type' => 'getType',
        'uri' => 'getUri',
        'user_authorization' => 'getUserAuthorization'
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
        $this->container['caller_authorization'] = isset($data['caller_authorization']) ? $data['caller_authorization'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['created_by_id'] = isset($data['created_by_id']) ? $data['created_by_id'] : null;
        $this->container['created_by_information'] = isset($data['created_by_information']) ? $data['created_by_information'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['file_uri'] = isset($data['file_uri']) ? $data['file_uri'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by_id'] = isset($data['last_modified_by_id']) ? $data['last_modified_by_id'] : null;
        $this->container['last_modified_by_information'] = isset($data['last_modified_by_information']) ? $data['last_modified_by_information'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['parent_folder_id'] = isset($data['parent_folder_id']) ? $data['parent_folder_id'] : null;
        $this->container['parent_folder_uri'] = isset($data['parent_folder_uri']) ? $data['parent_folder_uri'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['thumb_height'] = isset($data['thumb_height']) ? $data['thumb_height'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['thumb_width'] = isset($data['thumb_width']) ? $data['thumb_width'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['user_authorization'] = isset($data['user_authorization']) ? $data['user_authorization'] : null;
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
     * Gets caller_authorization
     *
     * @return \DocuSign\eSign\Model\WorkspaceUserAuthorization
     */
    public function getCallerAuthorization()
    {
        return $this->container['caller_authorization'];
    }

    /**
     * Sets caller_authorization
     *
     * @param \DocuSign\eSign\Model\WorkspaceUserAuthorization $caller_authorization caller_authorization
     *
     * @return $this
     */
    public function setCallerAuthorization($caller_authorization)
    {
        $this->container['caller_authorization'] = $caller_authorization;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return ?string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param ?string $content_type 
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets created
     *
     * @return ?string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param ?string $created The UTC DateTime when the workspace item was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets created_by_id
     *
     * @return ?string
     */
    public function getCreatedById()
    {
        return $this->container['created_by_id'];
    }

    /**
     * Sets created_by_id
     *
     * @param ?string $created_by_id 
     *
     * @return $this
     */
    public function setCreatedById($created_by_id)
    {
        $this->container['created_by_id'] = $created_by_id;

        return $this;
    }

    /**
     * Gets created_by_information
     *
     * @return \DocuSign\eSign\Model\WorkspaceUser
     */
    public function getCreatedByInformation()
    {
        return $this->container['created_by_information'];
    }

    /**
     * Sets created_by_information
     *
     * @param \DocuSign\eSign\Model\WorkspaceUser $created_by_information created_by_information
     *
     * @return $this
     */
    public function setCreatedByInformation($created_by_information)
    {
        $this->container['created_by_information'] = $created_by_information;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return ?string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param ?string $extension 
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return ?string
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param ?string $file_size 
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_uri
     *
     * @return ?string
     */
    public function getFileUri()
    {
        return $this->container['file_uri'];
    }

    /**
     * Sets file_uri
     *
     * @param ?string $file_uri 
     *
     * @return $this
     */
    public function setFileUri($file_uri)
    {
        $this->container['file_uri'] = $file_uri;

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
     * Gets is_public
     *
     * @return ?string
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param ?string $is_public If true, this supersedes need for bit mask permission with workspaceUserAuthorization
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return ?string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param ?string $last_modified 
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by_id
     *
     * @return ?string
     */
    public function getLastModifiedById()
    {
        return $this->container['last_modified_by_id'];
    }

    /**
     * Sets last_modified_by_id
     *
     * @param ?string $last_modified_by_id Utc date and time the comment was last updated (can only be done by creator)
     *
     * @return $this
     */
    public function setLastModifiedById($last_modified_by_id)
    {
        $this->container['last_modified_by_id'] = $last_modified_by_id;

        return $this;
    }

    /**
     * Gets last_modified_by_information
     *
     * @return \DocuSign\eSign\Model\WorkspaceUser
     */
    public function getLastModifiedByInformation()
    {
        return $this->container['last_modified_by_information'];
    }

    /**
     * Sets last_modified_by_information
     *
     * @param \DocuSign\eSign\Model\WorkspaceUser $last_modified_by_information last_modified_by_information
     *
     * @return $this
     */
    public function setLastModifiedByInformation($last_modified_by_information)
    {
        $this->container['last_modified_by_information'] = $last_modified_by_information;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name A simple string description of the item, such as a file name or a folder name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets page_count
     *
     * @return ?string
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     *
     * @param ?string $page_count 
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return ?string
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param ?string $parent_folder_id The ID of the parent folder. This is the GUID of the parent folder, or the special value 'root' for the root folder.
     *
     * @return $this
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets parent_folder_uri
     *
     * @return ?string
     */
    public function getParentFolderUri()
    {
        return $this->container['parent_folder_uri'];
    }

    /**
     * Sets parent_folder_uri
     *
     * @param ?string $parent_folder_uri 
     *
     * @return $this
     */
    public function setParentFolderUri($parent_folder_uri)
    {
        $this->container['parent_folder_uri'] = $parent_folder_uri;

        return $this;
    }

    /**
     * Gets sha256
     *
     * @return ?string
     */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
     * Sets sha256
     *
     * @param ?string $sha256 
     *
     * @return $this
     */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;

        return $this;
    }

    /**
     * Gets thumb_height
     *
     * @return ?string
     */
    public function getThumbHeight()
    {
        return $this->container['thumb_height'];
    }

    /**
     * Sets thumb_height
     *
     * @param ?string $thumb_height 
     *
     * @return $this
     */
    public function setThumbHeight($thumb_height)
    {
        $this->container['thumb_height'] = $thumb_height;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return \DocuSign\eSign\Model\Page
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param \DocuSign\eSign\Model\Page $thumbnail thumbnail
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets thumb_width
     *
     * @return ?string
     */
    public function getThumbWidth()
    {
        return $this->container['thumb_width'];
    }

    /**
     * Sets thumb_width
     *
     * @param ?string $thumb_width 
     *
     * @return $this
     */
    public function setThumbWidth($thumb_width)
    {
        $this->container['thumb_width'] = $thumb_width;

        return $this;
    }

    /**
     * Gets type
     *
     * @return ?string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param ?string $type The type of the workspace item. Valid values are file, folder.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets user_authorization
     *
     * @return \DocuSign\eSign\Model\WorkspaceUserAuthorization
     */
    public function getUserAuthorization()
    {
        return $this->container['user_authorization'];
    }

    /**
     * Sets user_authorization
     *
     * @param \DocuSign\eSign\Model\WorkspaceUserAuthorization $user_authorization user_authorization
     *
     * @return $this
     */
    public function setUserAuthorization($user_authorization)
    {
        $this->container['user_authorization'] = $user_authorization;

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

