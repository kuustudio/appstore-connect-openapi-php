<?php
/**
 * BetaGroupAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * App Store Connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
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
 * BetaGroupAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BetaGroupAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BetaGroup_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'created_date' => '\DateTime',
        'is_internal_group' => 'bool',
        'public_link_enabled' => 'bool',
        'public_link_id' => 'string',
        'public_link_limit_enabled' => 'bool',
        'public_link_limit' => 'int',
        'public_link' => 'string',
        'feedback_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'created_date' => 'date-time',
        'is_internal_group' => null,
        'public_link_enabled' => null,
        'public_link_id' => null,
        'public_link_limit_enabled' => null,
        'public_link_limit' => null,
        'public_link' => null,
        'feedback_enabled' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'created_date' => 'createdDate',
        'is_internal_group' => 'isInternalGroup',
        'public_link_enabled' => 'publicLinkEnabled',
        'public_link_id' => 'publicLinkId',
        'public_link_limit_enabled' => 'publicLinkLimitEnabled',
        'public_link_limit' => 'publicLinkLimit',
        'public_link' => 'publicLink',
        'feedback_enabled' => 'feedbackEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'created_date' => 'setCreatedDate',
        'is_internal_group' => 'setIsInternalGroup',
        'public_link_enabled' => 'setPublicLinkEnabled',
        'public_link_id' => 'setPublicLinkId',
        'public_link_limit_enabled' => 'setPublicLinkLimitEnabled',
        'public_link_limit' => 'setPublicLinkLimit',
        'public_link' => 'setPublicLink',
        'feedback_enabled' => 'setFeedbackEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'created_date' => 'getCreatedDate',
        'is_internal_group' => 'getIsInternalGroup',
        'public_link_enabled' => 'getPublicLinkEnabled',
        'public_link_id' => 'getPublicLinkId',
        'public_link_limit_enabled' => 'getPublicLinkLimitEnabled',
        'public_link_limit' => 'getPublicLinkLimit',
        'public_link' => 'getPublicLink',
        'feedback_enabled' => 'getFeedbackEnabled'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['is_internal_group'] = isset($data['is_internal_group']) ? $data['is_internal_group'] : null;
        $this->container['public_link_enabled'] = isset($data['public_link_enabled']) ? $data['public_link_enabled'] : null;
        $this->container['public_link_id'] = isset($data['public_link_id']) ? $data['public_link_id'] : null;
        $this->container['public_link_limit_enabled'] = isset($data['public_link_limit_enabled']) ? $data['public_link_limit_enabled'] : null;
        $this->container['public_link_limit'] = isset($data['public_link_limit']) ? $data['public_link_limit'] : null;
        $this->container['public_link'] = isset($data['public_link']) ? $data['public_link'] : null;
        $this->container['feedback_enabled'] = isset($data['feedback_enabled']) ? $data['feedback_enabled'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime|null $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets is_internal_group
     *
     * @return bool|null
     */
    public function getIsInternalGroup()
    {
        return $this->container['is_internal_group'];
    }

    /**
     * Sets is_internal_group
     *
     * @param bool|null $is_internal_group is_internal_group
     *
     * @return $this
     */
    public function setIsInternalGroup($is_internal_group)
    {
        $this->container['is_internal_group'] = $is_internal_group;

        return $this;
    }

    /**
     * Gets public_link_enabled
     *
     * @return bool|null
     */
    public function getPublicLinkEnabled()
    {
        return $this->container['public_link_enabled'];
    }

    /**
     * Sets public_link_enabled
     *
     * @param bool|null $public_link_enabled public_link_enabled
     *
     * @return $this
     */
    public function setPublicLinkEnabled($public_link_enabled)
    {
        $this->container['public_link_enabled'] = $public_link_enabled;

        return $this;
    }

    /**
     * Gets public_link_id
     *
     * @return string|null
     */
    public function getPublicLinkId()
    {
        return $this->container['public_link_id'];
    }

    /**
     * Sets public_link_id
     *
     * @param string|null $public_link_id public_link_id
     *
     * @return $this
     */
    public function setPublicLinkId($public_link_id)
    {
        $this->container['public_link_id'] = $public_link_id;

        return $this;
    }

    /**
     * Gets public_link_limit_enabled
     *
     * @return bool|null
     */
    public function getPublicLinkLimitEnabled()
    {
        return $this->container['public_link_limit_enabled'];
    }

    /**
     * Sets public_link_limit_enabled
     *
     * @param bool|null $public_link_limit_enabled public_link_limit_enabled
     *
     * @return $this
     */
    public function setPublicLinkLimitEnabled($public_link_limit_enabled)
    {
        $this->container['public_link_limit_enabled'] = $public_link_limit_enabled;

        return $this;
    }

    /**
     * Gets public_link_limit
     *
     * @return int|null
     */
    public function getPublicLinkLimit()
    {
        return $this->container['public_link_limit'];
    }

    /**
     * Sets public_link_limit
     *
     * @param int|null $public_link_limit public_link_limit
     *
     * @return $this
     */
    public function setPublicLinkLimit($public_link_limit)
    {
        $this->container['public_link_limit'] = $public_link_limit;

        return $this;
    }

    /**
     * Gets public_link
     *
     * @return string|null
     */
    public function getPublicLink()
    {
        return $this->container['public_link'];
    }

    /**
     * Sets public_link
     *
     * @param string|null $public_link public_link
     *
     * @return $this
     */
    public function setPublicLink($public_link)
    {
        $this->container['public_link'] = $public_link;

        return $this;
    }

    /**
     * Gets feedback_enabled
     *
     * @return bool|null
     */
    public function getFeedbackEnabled()
    {
        return $this->container['feedback_enabled'];
    }

    /**
     * Sets feedback_enabled
     *
     * @param bool|null $feedback_enabled feedback_enabled
     *
     * @return $this
     */
    public function setFeedbackEnabled($feedback_enabled)
    {
        $this->container['feedback_enabled'] = $feedback_enabled;

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

