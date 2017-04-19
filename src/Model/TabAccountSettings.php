<?php
/**
 * TabAccountSettings
 *
 * PHP version 5
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
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * TabAccountSettings Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TabAccountSettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tabAccountSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_tab_order' => 'string',
        'allow_tab_order_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'approve_decline_tabs_enabled' => 'string',
        'approve_decline_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'calculated_fields_enabled' => 'string',
        'calculated_fields_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'checkbox_tabs_enabled' => 'string',
        'checkbox_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'data_field_regex_enabled' => 'string',
        'data_field_regex_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'data_field_size_enabled' => 'string',
        'data_field_size_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'first_last_email_tabs_enabled' => 'string',
        'first_last_email_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'list_tabs_enabled' => 'string',
        'list_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'note_tabs_enabled' => 'string',
        'note_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'radio_tabs_enabled' => 'string',
        'radio_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'saving_custom_tabs_enabled' => 'string',
        'saving_custom_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'sender_to_change_tab_assignments_enabled' => 'string',
        'sender_to_change_tab_assignments_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'shared_custom_tabs_enabled' => 'string',
        'shared_custom_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'tab_data_label_enabled' => 'string',
        'tab_data_label_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'tab_location_enabled' => 'string',
        'tab_location_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'tab_locking_enabled' => 'string',
        'tab_locking_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'tab_scale_enabled' => 'string',
        'tab_scale_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'tab_text_formatting_enabled' => 'string',
        'tab_text_formatting_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'text_tabs_enabled' => 'string',
        'text_tabs_metadata' => '\DocuSign\eSign\Model\SettingsMetadata'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'allow_tab_order' => 'allowTabOrder',
        'allow_tab_order_metadata' => 'allowTabOrderMetadata',
        'approve_decline_tabs_enabled' => 'approveDeclineTabsEnabled',
        'approve_decline_tabs_metadata' => 'approveDeclineTabsMetadata',
        'calculated_fields_enabled' => 'calculatedFieldsEnabled',
        'calculated_fields_metadata' => 'calculatedFieldsMetadata',
        'checkbox_tabs_enabled' => 'checkboxTabsEnabled',
        'checkbox_tabs_metadata' => 'checkboxTabsMetadata',
        'data_field_regex_enabled' => 'dataFieldRegexEnabled',
        'data_field_regex_metadata' => 'dataFieldRegexMetadata',
        'data_field_size_enabled' => 'dataFieldSizeEnabled',
        'data_field_size_metadata' => 'dataFieldSizeMetadata',
        'first_last_email_tabs_enabled' => 'firstLastEmailTabsEnabled',
        'first_last_email_tabs_metadata' => 'firstLastEmailTabsMetadata',
        'list_tabs_enabled' => 'listTabsEnabled',
        'list_tabs_metadata' => 'listTabsMetadata',
        'note_tabs_enabled' => 'noteTabsEnabled',
        'note_tabs_metadata' => 'noteTabsMetadata',
        'radio_tabs_enabled' => 'radioTabsEnabled',
        'radio_tabs_metadata' => 'radioTabsMetadata',
        'saving_custom_tabs_enabled' => 'savingCustomTabsEnabled',
        'saving_custom_tabs_metadata' => 'savingCustomTabsMetadata',
        'sender_to_change_tab_assignments_enabled' => 'senderToChangeTabAssignmentsEnabled',
        'sender_to_change_tab_assignments_metadata' => 'senderToChangeTabAssignmentsMetadata',
        'shared_custom_tabs_enabled' => 'sharedCustomTabsEnabled',
        'shared_custom_tabs_metadata' => 'sharedCustomTabsMetadata',
        'tab_data_label_enabled' => 'tabDataLabelEnabled',
        'tab_data_label_metadata' => 'tabDataLabelMetadata',
        'tab_location_enabled' => 'tabLocationEnabled',
        'tab_location_metadata' => 'tabLocationMetadata',
        'tab_locking_enabled' => 'tabLockingEnabled',
        'tab_locking_metadata' => 'tabLockingMetadata',
        'tab_scale_enabled' => 'tabScaleEnabled',
        'tab_scale_metadata' => 'tabScaleMetadata',
        'tab_text_formatting_enabled' => 'tabTextFormattingEnabled',
        'tab_text_formatting_metadata' => 'tabTextFormattingMetadata',
        'text_tabs_enabled' => 'textTabsEnabled',
        'text_tabs_metadata' => 'textTabsMetadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allow_tab_order' => 'setAllowTabOrder',
        'allow_tab_order_metadata' => 'setAllowTabOrderMetadata',
        'approve_decline_tabs_enabled' => 'setApproveDeclineTabsEnabled',
        'approve_decline_tabs_metadata' => 'setApproveDeclineTabsMetadata',
        'calculated_fields_enabled' => 'setCalculatedFieldsEnabled',
        'calculated_fields_metadata' => 'setCalculatedFieldsMetadata',
        'checkbox_tabs_enabled' => 'setCheckboxTabsEnabled',
        'checkbox_tabs_metadata' => 'setCheckboxTabsMetadata',
        'data_field_regex_enabled' => 'setDataFieldRegexEnabled',
        'data_field_regex_metadata' => 'setDataFieldRegexMetadata',
        'data_field_size_enabled' => 'setDataFieldSizeEnabled',
        'data_field_size_metadata' => 'setDataFieldSizeMetadata',
        'first_last_email_tabs_enabled' => 'setFirstLastEmailTabsEnabled',
        'first_last_email_tabs_metadata' => 'setFirstLastEmailTabsMetadata',
        'list_tabs_enabled' => 'setListTabsEnabled',
        'list_tabs_metadata' => 'setListTabsMetadata',
        'note_tabs_enabled' => 'setNoteTabsEnabled',
        'note_tabs_metadata' => 'setNoteTabsMetadata',
        'radio_tabs_enabled' => 'setRadioTabsEnabled',
        'radio_tabs_metadata' => 'setRadioTabsMetadata',
        'saving_custom_tabs_enabled' => 'setSavingCustomTabsEnabled',
        'saving_custom_tabs_metadata' => 'setSavingCustomTabsMetadata',
        'sender_to_change_tab_assignments_enabled' => 'setSenderToChangeTabAssignmentsEnabled',
        'sender_to_change_tab_assignments_metadata' => 'setSenderToChangeTabAssignmentsMetadata',
        'shared_custom_tabs_enabled' => 'setSharedCustomTabsEnabled',
        'shared_custom_tabs_metadata' => 'setSharedCustomTabsMetadata',
        'tab_data_label_enabled' => 'setTabDataLabelEnabled',
        'tab_data_label_metadata' => 'setTabDataLabelMetadata',
        'tab_location_enabled' => 'setTabLocationEnabled',
        'tab_location_metadata' => 'setTabLocationMetadata',
        'tab_locking_enabled' => 'setTabLockingEnabled',
        'tab_locking_metadata' => 'setTabLockingMetadata',
        'tab_scale_enabled' => 'setTabScaleEnabled',
        'tab_scale_metadata' => 'setTabScaleMetadata',
        'tab_text_formatting_enabled' => 'setTabTextFormattingEnabled',
        'tab_text_formatting_metadata' => 'setTabTextFormattingMetadata',
        'text_tabs_enabled' => 'setTextTabsEnabled',
        'text_tabs_metadata' => 'setTextTabsMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allow_tab_order' => 'getAllowTabOrder',
        'allow_tab_order_metadata' => 'getAllowTabOrderMetadata',
        'approve_decline_tabs_enabled' => 'getApproveDeclineTabsEnabled',
        'approve_decline_tabs_metadata' => 'getApproveDeclineTabsMetadata',
        'calculated_fields_enabled' => 'getCalculatedFieldsEnabled',
        'calculated_fields_metadata' => 'getCalculatedFieldsMetadata',
        'checkbox_tabs_enabled' => 'getCheckboxTabsEnabled',
        'checkbox_tabs_metadata' => 'getCheckboxTabsMetadata',
        'data_field_regex_enabled' => 'getDataFieldRegexEnabled',
        'data_field_regex_metadata' => 'getDataFieldRegexMetadata',
        'data_field_size_enabled' => 'getDataFieldSizeEnabled',
        'data_field_size_metadata' => 'getDataFieldSizeMetadata',
        'first_last_email_tabs_enabled' => 'getFirstLastEmailTabsEnabled',
        'first_last_email_tabs_metadata' => 'getFirstLastEmailTabsMetadata',
        'list_tabs_enabled' => 'getListTabsEnabled',
        'list_tabs_metadata' => 'getListTabsMetadata',
        'note_tabs_enabled' => 'getNoteTabsEnabled',
        'note_tabs_metadata' => 'getNoteTabsMetadata',
        'radio_tabs_enabled' => 'getRadioTabsEnabled',
        'radio_tabs_metadata' => 'getRadioTabsMetadata',
        'saving_custom_tabs_enabled' => 'getSavingCustomTabsEnabled',
        'saving_custom_tabs_metadata' => 'getSavingCustomTabsMetadata',
        'sender_to_change_tab_assignments_enabled' => 'getSenderToChangeTabAssignmentsEnabled',
        'sender_to_change_tab_assignments_metadata' => 'getSenderToChangeTabAssignmentsMetadata',
        'shared_custom_tabs_enabled' => 'getSharedCustomTabsEnabled',
        'shared_custom_tabs_metadata' => 'getSharedCustomTabsMetadata',
        'tab_data_label_enabled' => 'getTabDataLabelEnabled',
        'tab_data_label_metadata' => 'getTabDataLabelMetadata',
        'tab_location_enabled' => 'getTabLocationEnabled',
        'tab_location_metadata' => 'getTabLocationMetadata',
        'tab_locking_enabled' => 'getTabLockingEnabled',
        'tab_locking_metadata' => 'getTabLockingMetadata',
        'tab_scale_enabled' => 'getTabScaleEnabled',
        'tab_scale_metadata' => 'getTabScaleMetadata',
        'tab_text_formatting_enabled' => 'getTabTextFormattingEnabled',
        'tab_text_formatting_metadata' => 'getTabTextFormattingMetadata',
        'text_tabs_enabled' => 'getTextTabsEnabled',
        'text_tabs_metadata' => 'getTextTabsMetadata'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allow_tab_order'] = isset($data['allow_tab_order']) ? $data['allow_tab_order'] : null;
        $this->container['allow_tab_order_metadata'] = isset($data['allow_tab_order_metadata']) ? $data['allow_tab_order_metadata'] : null;
        $this->container['approve_decline_tabs_enabled'] = isset($data['approve_decline_tabs_enabled']) ? $data['approve_decline_tabs_enabled'] : null;
        $this->container['approve_decline_tabs_metadata'] = isset($data['approve_decline_tabs_metadata']) ? $data['approve_decline_tabs_metadata'] : null;
        $this->container['calculated_fields_enabled'] = isset($data['calculated_fields_enabled']) ? $data['calculated_fields_enabled'] : null;
        $this->container['calculated_fields_metadata'] = isset($data['calculated_fields_metadata']) ? $data['calculated_fields_metadata'] : null;
        $this->container['checkbox_tabs_enabled'] = isset($data['checkbox_tabs_enabled']) ? $data['checkbox_tabs_enabled'] : null;
        $this->container['checkbox_tabs_metadata'] = isset($data['checkbox_tabs_metadata']) ? $data['checkbox_tabs_metadata'] : null;
        $this->container['data_field_regex_enabled'] = isset($data['data_field_regex_enabled']) ? $data['data_field_regex_enabled'] : null;
        $this->container['data_field_regex_metadata'] = isset($data['data_field_regex_metadata']) ? $data['data_field_regex_metadata'] : null;
        $this->container['data_field_size_enabled'] = isset($data['data_field_size_enabled']) ? $data['data_field_size_enabled'] : null;
        $this->container['data_field_size_metadata'] = isset($data['data_field_size_metadata']) ? $data['data_field_size_metadata'] : null;
        $this->container['first_last_email_tabs_enabled'] = isset($data['first_last_email_tabs_enabled']) ? $data['first_last_email_tabs_enabled'] : null;
        $this->container['first_last_email_tabs_metadata'] = isset($data['first_last_email_tabs_metadata']) ? $data['first_last_email_tabs_metadata'] : null;
        $this->container['list_tabs_enabled'] = isset($data['list_tabs_enabled']) ? $data['list_tabs_enabled'] : null;
        $this->container['list_tabs_metadata'] = isset($data['list_tabs_metadata']) ? $data['list_tabs_metadata'] : null;
        $this->container['note_tabs_enabled'] = isset($data['note_tabs_enabled']) ? $data['note_tabs_enabled'] : null;
        $this->container['note_tabs_metadata'] = isset($data['note_tabs_metadata']) ? $data['note_tabs_metadata'] : null;
        $this->container['radio_tabs_enabled'] = isset($data['radio_tabs_enabled']) ? $data['radio_tabs_enabled'] : null;
        $this->container['radio_tabs_metadata'] = isset($data['radio_tabs_metadata']) ? $data['radio_tabs_metadata'] : null;
        $this->container['saving_custom_tabs_enabled'] = isset($data['saving_custom_tabs_enabled']) ? $data['saving_custom_tabs_enabled'] : null;
        $this->container['saving_custom_tabs_metadata'] = isset($data['saving_custom_tabs_metadata']) ? $data['saving_custom_tabs_metadata'] : null;
        $this->container['sender_to_change_tab_assignments_enabled'] = isset($data['sender_to_change_tab_assignments_enabled']) ? $data['sender_to_change_tab_assignments_enabled'] : null;
        $this->container['sender_to_change_tab_assignments_metadata'] = isset($data['sender_to_change_tab_assignments_metadata']) ? $data['sender_to_change_tab_assignments_metadata'] : null;
        $this->container['shared_custom_tabs_enabled'] = isset($data['shared_custom_tabs_enabled']) ? $data['shared_custom_tabs_enabled'] : null;
        $this->container['shared_custom_tabs_metadata'] = isset($data['shared_custom_tabs_metadata']) ? $data['shared_custom_tabs_metadata'] : null;
        $this->container['tab_data_label_enabled'] = isset($data['tab_data_label_enabled']) ? $data['tab_data_label_enabled'] : null;
        $this->container['tab_data_label_metadata'] = isset($data['tab_data_label_metadata']) ? $data['tab_data_label_metadata'] : null;
        $this->container['tab_location_enabled'] = isset($data['tab_location_enabled']) ? $data['tab_location_enabled'] : null;
        $this->container['tab_location_metadata'] = isset($data['tab_location_metadata']) ? $data['tab_location_metadata'] : null;
        $this->container['tab_locking_enabled'] = isset($data['tab_locking_enabled']) ? $data['tab_locking_enabled'] : null;
        $this->container['tab_locking_metadata'] = isset($data['tab_locking_metadata']) ? $data['tab_locking_metadata'] : null;
        $this->container['tab_scale_enabled'] = isset($data['tab_scale_enabled']) ? $data['tab_scale_enabled'] : null;
        $this->container['tab_scale_metadata'] = isset($data['tab_scale_metadata']) ? $data['tab_scale_metadata'] : null;
        $this->container['tab_text_formatting_enabled'] = isset($data['tab_text_formatting_enabled']) ? $data['tab_text_formatting_enabled'] : null;
        $this->container['tab_text_formatting_metadata'] = isset($data['tab_text_formatting_metadata']) ? $data['tab_text_formatting_metadata'] : null;
        $this->container['text_tabs_enabled'] = isset($data['text_tabs_enabled']) ? $data['text_tabs_enabled'] : null;
        $this->container['text_tabs_metadata'] = isset($data['text_tabs_metadata']) ? $data['text_tabs_metadata'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets allow_tab_order
     * @return string
     */
    public function getAllowTabOrder()
    {
        return $this->container['allow_tab_order'];
    }

    /**
     * Sets allow_tab_order
     * @param string $allow_tab_order 
     * @return $this
     */
    public function setAllowTabOrder($allow_tab_order)
    {
        $this->container['allow_tab_order'] = $allow_tab_order;

        return $this;
    }

    /**
     * Gets allow_tab_order_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getAllowTabOrderMetadata()
    {
        return $this->container['allow_tab_order_metadata'];
    }

    /**
     * Sets allow_tab_order_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $allow_tab_order_metadata
     * @return $this
     */
    public function setAllowTabOrderMetadata($allow_tab_order_metadata)
    {
        $this->container['allow_tab_order_metadata'] = $allow_tab_order_metadata;

        return $this;
    }

    /**
     * Gets approve_decline_tabs_enabled
     * @return string
     */
    public function getApproveDeclineTabsEnabled()
    {
        return $this->container['approve_decline_tabs_enabled'];
    }

    /**
     * Sets approve_decline_tabs_enabled
     * @param string $approve_decline_tabs_enabled 
     * @return $this
     */
    public function setApproveDeclineTabsEnabled($approve_decline_tabs_enabled)
    {
        $this->container['approve_decline_tabs_enabled'] = $approve_decline_tabs_enabled;

        return $this;
    }

    /**
     * Gets approve_decline_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getApproveDeclineTabsMetadata()
    {
        return $this->container['approve_decline_tabs_metadata'];
    }

    /**
     * Sets approve_decline_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $approve_decline_tabs_metadata
     * @return $this
     */
    public function setApproveDeclineTabsMetadata($approve_decline_tabs_metadata)
    {
        $this->container['approve_decline_tabs_metadata'] = $approve_decline_tabs_metadata;

        return $this;
    }

    /**
     * Gets calculated_fields_enabled
     * @return string
     */
    public function getCalculatedFieldsEnabled()
    {
        return $this->container['calculated_fields_enabled'];
    }

    /**
     * Sets calculated_fields_enabled
     * @param string $calculated_fields_enabled 
     * @return $this
     */
    public function setCalculatedFieldsEnabled($calculated_fields_enabled)
    {
        $this->container['calculated_fields_enabled'] = $calculated_fields_enabled;

        return $this;
    }

    /**
     * Gets calculated_fields_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCalculatedFieldsMetadata()
    {
        return $this->container['calculated_fields_metadata'];
    }

    /**
     * Sets calculated_fields_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $calculated_fields_metadata
     * @return $this
     */
    public function setCalculatedFieldsMetadata($calculated_fields_metadata)
    {
        $this->container['calculated_fields_metadata'] = $calculated_fields_metadata;

        return $this;
    }

    /**
     * Gets checkbox_tabs_enabled
     * @return string
     */
    public function getCheckboxTabsEnabled()
    {
        return $this->container['checkbox_tabs_enabled'];
    }

    /**
     * Sets checkbox_tabs_enabled
     * @param string $checkbox_tabs_enabled 
     * @return $this
     */
    public function setCheckboxTabsEnabled($checkbox_tabs_enabled)
    {
        $this->container['checkbox_tabs_enabled'] = $checkbox_tabs_enabled;

        return $this;
    }

    /**
     * Gets checkbox_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCheckboxTabsMetadata()
    {
        return $this->container['checkbox_tabs_metadata'];
    }

    /**
     * Sets checkbox_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $checkbox_tabs_metadata
     * @return $this
     */
    public function setCheckboxTabsMetadata($checkbox_tabs_metadata)
    {
        $this->container['checkbox_tabs_metadata'] = $checkbox_tabs_metadata;

        return $this;
    }

    /**
     * Gets data_field_regex_enabled
     * @return string
     */
    public function getDataFieldRegexEnabled()
    {
        return $this->container['data_field_regex_enabled'];
    }

    /**
     * Sets data_field_regex_enabled
     * @param string $data_field_regex_enabled 
     * @return $this
     */
    public function setDataFieldRegexEnabled($data_field_regex_enabled)
    {
        $this->container['data_field_regex_enabled'] = $data_field_regex_enabled;

        return $this;
    }

    /**
     * Gets data_field_regex_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getDataFieldRegexMetadata()
    {
        return $this->container['data_field_regex_metadata'];
    }

    /**
     * Sets data_field_regex_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $data_field_regex_metadata
     * @return $this
     */
    public function setDataFieldRegexMetadata($data_field_regex_metadata)
    {
        $this->container['data_field_regex_metadata'] = $data_field_regex_metadata;

        return $this;
    }

    /**
     * Gets data_field_size_enabled
     * @return string
     */
    public function getDataFieldSizeEnabled()
    {
        return $this->container['data_field_size_enabled'];
    }

    /**
     * Sets data_field_size_enabled
     * @param string $data_field_size_enabled 
     * @return $this
     */
    public function setDataFieldSizeEnabled($data_field_size_enabled)
    {
        $this->container['data_field_size_enabled'] = $data_field_size_enabled;

        return $this;
    }

    /**
     * Gets data_field_size_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getDataFieldSizeMetadata()
    {
        return $this->container['data_field_size_metadata'];
    }

    /**
     * Sets data_field_size_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $data_field_size_metadata
     * @return $this
     */
    public function setDataFieldSizeMetadata($data_field_size_metadata)
    {
        $this->container['data_field_size_metadata'] = $data_field_size_metadata;

        return $this;
    }

    /**
     * Gets first_last_email_tabs_enabled
     * @return string
     */
    public function getFirstLastEmailTabsEnabled()
    {
        return $this->container['first_last_email_tabs_enabled'];
    }

    /**
     * Sets first_last_email_tabs_enabled
     * @param string $first_last_email_tabs_enabled 
     * @return $this
     */
    public function setFirstLastEmailTabsEnabled($first_last_email_tabs_enabled)
    {
        $this->container['first_last_email_tabs_enabled'] = $first_last_email_tabs_enabled;

        return $this;
    }

    /**
     * Gets first_last_email_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getFirstLastEmailTabsMetadata()
    {
        return $this->container['first_last_email_tabs_metadata'];
    }

    /**
     * Sets first_last_email_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $first_last_email_tabs_metadata
     * @return $this
     */
    public function setFirstLastEmailTabsMetadata($first_last_email_tabs_metadata)
    {
        $this->container['first_last_email_tabs_metadata'] = $first_last_email_tabs_metadata;

        return $this;
    }

    /**
     * Gets list_tabs_enabled
     * @return string
     */
    public function getListTabsEnabled()
    {
        return $this->container['list_tabs_enabled'];
    }

    /**
     * Sets list_tabs_enabled
     * @param string $list_tabs_enabled 
     * @return $this
     */
    public function setListTabsEnabled($list_tabs_enabled)
    {
        $this->container['list_tabs_enabled'] = $list_tabs_enabled;

        return $this;
    }

    /**
     * Gets list_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getListTabsMetadata()
    {
        return $this->container['list_tabs_metadata'];
    }

    /**
     * Sets list_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $list_tabs_metadata
     * @return $this
     */
    public function setListTabsMetadata($list_tabs_metadata)
    {
        $this->container['list_tabs_metadata'] = $list_tabs_metadata;

        return $this;
    }

    /**
     * Gets note_tabs_enabled
     * @return string
     */
    public function getNoteTabsEnabled()
    {
        return $this->container['note_tabs_enabled'];
    }

    /**
     * Sets note_tabs_enabled
     * @param string $note_tabs_enabled 
     * @return $this
     */
    public function setNoteTabsEnabled($note_tabs_enabled)
    {
        $this->container['note_tabs_enabled'] = $note_tabs_enabled;

        return $this;
    }

    /**
     * Gets note_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getNoteTabsMetadata()
    {
        return $this->container['note_tabs_metadata'];
    }

    /**
     * Sets note_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $note_tabs_metadata
     * @return $this
     */
    public function setNoteTabsMetadata($note_tabs_metadata)
    {
        $this->container['note_tabs_metadata'] = $note_tabs_metadata;

        return $this;
    }

    /**
     * Gets radio_tabs_enabled
     * @return string
     */
    public function getRadioTabsEnabled()
    {
        return $this->container['radio_tabs_enabled'];
    }

    /**
     * Sets radio_tabs_enabled
     * @param string $radio_tabs_enabled 
     * @return $this
     */
    public function setRadioTabsEnabled($radio_tabs_enabled)
    {
        $this->container['radio_tabs_enabled'] = $radio_tabs_enabled;

        return $this;
    }

    /**
     * Gets radio_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getRadioTabsMetadata()
    {
        return $this->container['radio_tabs_metadata'];
    }

    /**
     * Sets radio_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $radio_tabs_metadata
     * @return $this
     */
    public function setRadioTabsMetadata($radio_tabs_metadata)
    {
        $this->container['radio_tabs_metadata'] = $radio_tabs_metadata;

        return $this;
    }

    /**
     * Gets saving_custom_tabs_enabled
     * @return string
     */
    public function getSavingCustomTabsEnabled()
    {
        return $this->container['saving_custom_tabs_enabled'];
    }

    /**
     * Sets saving_custom_tabs_enabled
     * @param string $saving_custom_tabs_enabled 
     * @return $this
     */
    public function setSavingCustomTabsEnabled($saving_custom_tabs_enabled)
    {
        $this->container['saving_custom_tabs_enabled'] = $saving_custom_tabs_enabled;

        return $this;
    }

    /**
     * Gets saving_custom_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getSavingCustomTabsMetadata()
    {
        return $this->container['saving_custom_tabs_metadata'];
    }

    /**
     * Sets saving_custom_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $saving_custom_tabs_metadata
     * @return $this
     */
    public function setSavingCustomTabsMetadata($saving_custom_tabs_metadata)
    {
        $this->container['saving_custom_tabs_metadata'] = $saving_custom_tabs_metadata;

        return $this;
    }

    /**
     * Gets sender_to_change_tab_assignments_enabled
     * @return string
     */
    public function getSenderToChangeTabAssignmentsEnabled()
    {
        return $this->container['sender_to_change_tab_assignments_enabled'];
    }

    /**
     * Sets sender_to_change_tab_assignments_enabled
     * @param string $sender_to_change_tab_assignments_enabled 
     * @return $this
     */
    public function setSenderToChangeTabAssignmentsEnabled($sender_to_change_tab_assignments_enabled)
    {
        $this->container['sender_to_change_tab_assignments_enabled'] = $sender_to_change_tab_assignments_enabled;

        return $this;
    }

    /**
     * Gets sender_to_change_tab_assignments_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getSenderToChangeTabAssignmentsMetadata()
    {
        return $this->container['sender_to_change_tab_assignments_metadata'];
    }

    /**
     * Sets sender_to_change_tab_assignments_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $sender_to_change_tab_assignments_metadata
     * @return $this
     */
    public function setSenderToChangeTabAssignmentsMetadata($sender_to_change_tab_assignments_metadata)
    {
        $this->container['sender_to_change_tab_assignments_metadata'] = $sender_to_change_tab_assignments_metadata;

        return $this;
    }

    /**
     * Gets shared_custom_tabs_enabled
     * @return string
     */
    public function getSharedCustomTabsEnabled()
    {
        return $this->container['shared_custom_tabs_enabled'];
    }

    /**
     * Sets shared_custom_tabs_enabled
     * @param string $shared_custom_tabs_enabled 
     * @return $this
     */
    public function setSharedCustomTabsEnabled($shared_custom_tabs_enabled)
    {
        $this->container['shared_custom_tabs_enabled'] = $shared_custom_tabs_enabled;

        return $this;
    }

    /**
     * Gets shared_custom_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getSharedCustomTabsMetadata()
    {
        return $this->container['shared_custom_tabs_metadata'];
    }

    /**
     * Sets shared_custom_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $shared_custom_tabs_metadata
     * @return $this
     */
    public function setSharedCustomTabsMetadata($shared_custom_tabs_metadata)
    {
        $this->container['shared_custom_tabs_metadata'] = $shared_custom_tabs_metadata;

        return $this;
    }

    /**
     * Gets tab_data_label_enabled
     * @return string
     */
    public function getTabDataLabelEnabled()
    {
        return $this->container['tab_data_label_enabled'];
    }

    /**
     * Sets tab_data_label_enabled
     * @param string $tab_data_label_enabled 
     * @return $this
     */
    public function setTabDataLabelEnabled($tab_data_label_enabled)
    {
        $this->container['tab_data_label_enabled'] = $tab_data_label_enabled;

        return $this;
    }

    /**
     * Gets tab_data_label_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTabDataLabelMetadata()
    {
        return $this->container['tab_data_label_metadata'];
    }

    /**
     * Sets tab_data_label_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $tab_data_label_metadata
     * @return $this
     */
    public function setTabDataLabelMetadata($tab_data_label_metadata)
    {
        $this->container['tab_data_label_metadata'] = $tab_data_label_metadata;

        return $this;
    }

    /**
     * Gets tab_location_enabled
     * @return string
     */
    public function getTabLocationEnabled()
    {
        return $this->container['tab_location_enabled'];
    }

    /**
     * Sets tab_location_enabled
     * @param string $tab_location_enabled 
     * @return $this
     */
    public function setTabLocationEnabled($tab_location_enabled)
    {
        $this->container['tab_location_enabled'] = $tab_location_enabled;

        return $this;
    }

    /**
     * Gets tab_location_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTabLocationMetadata()
    {
        return $this->container['tab_location_metadata'];
    }

    /**
     * Sets tab_location_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $tab_location_metadata
     * @return $this
     */
    public function setTabLocationMetadata($tab_location_metadata)
    {
        $this->container['tab_location_metadata'] = $tab_location_metadata;

        return $this;
    }

    /**
     * Gets tab_locking_enabled
     * @return string
     */
    public function getTabLockingEnabled()
    {
        return $this->container['tab_locking_enabled'];
    }

    /**
     * Sets tab_locking_enabled
     * @param string $tab_locking_enabled 
     * @return $this
     */
    public function setTabLockingEnabled($tab_locking_enabled)
    {
        $this->container['tab_locking_enabled'] = $tab_locking_enabled;

        return $this;
    }

    /**
     * Gets tab_locking_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTabLockingMetadata()
    {
        return $this->container['tab_locking_metadata'];
    }

    /**
     * Sets tab_locking_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $tab_locking_metadata
     * @return $this
     */
    public function setTabLockingMetadata($tab_locking_metadata)
    {
        $this->container['tab_locking_metadata'] = $tab_locking_metadata;

        return $this;
    }

    /**
     * Gets tab_scale_enabled
     * @return string
     */
    public function getTabScaleEnabled()
    {
        return $this->container['tab_scale_enabled'];
    }

    /**
     * Sets tab_scale_enabled
     * @param string $tab_scale_enabled 
     * @return $this
     */
    public function setTabScaleEnabled($tab_scale_enabled)
    {
        $this->container['tab_scale_enabled'] = $tab_scale_enabled;

        return $this;
    }

    /**
     * Gets tab_scale_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTabScaleMetadata()
    {
        return $this->container['tab_scale_metadata'];
    }

    /**
     * Sets tab_scale_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $tab_scale_metadata
     * @return $this
     */
    public function setTabScaleMetadata($tab_scale_metadata)
    {
        $this->container['tab_scale_metadata'] = $tab_scale_metadata;

        return $this;
    }

    /**
     * Gets tab_text_formatting_enabled
     * @return string
     */
    public function getTabTextFormattingEnabled()
    {
        return $this->container['tab_text_formatting_enabled'];
    }

    /**
     * Sets tab_text_formatting_enabled
     * @param string $tab_text_formatting_enabled 
     * @return $this
     */
    public function setTabTextFormattingEnabled($tab_text_formatting_enabled)
    {
        $this->container['tab_text_formatting_enabled'] = $tab_text_formatting_enabled;

        return $this;
    }

    /**
     * Gets tab_text_formatting_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTabTextFormattingMetadata()
    {
        return $this->container['tab_text_formatting_metadata'];
    }

    /**
     * Sets tab_text_formatting_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $tab_text_formatting_metadata
     * @return $this
     */
    public function setTabTextFormattingMetadata($tab_text_formatting_metadata)
    {
        $this->container['tab_text_formatting_metadata'] = $tab_text_formatting_metadata;

        return $this;
    }

    /**
     * Gets text_tabs_enabled
     * @return string
     */
    public function getTextTabsEnabled()
    {
        return $this->container['text_tabs_enabled'];
    }

    /**
     * Sets text_tabs_enabled
     * @param string $text_tabs_enabled 
     * @return $this
     */
    public function setTextTabsEnabled($text_tabs_enabled)
    {
        $this->container['text_tabs_enabled'] = $text_tabs_enabled;

        return $this;
    }

    /**
     * Gets text_tabs_metadata
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getTextTabsMetadata()
    {
        return $this->container['text_tabs_metadata'];
    }

    /**
     * Sets text_tabs_metadata
     * @param \DocuSign\eSign\Model\SettingsMetadata $text_tabs_metadata
     * @return $this
     */
    public function setTextTabsMetadata($text_tabs_metadata)
    {
        $this->container['text_tabs_metadata'] = $text_tabs_metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}

