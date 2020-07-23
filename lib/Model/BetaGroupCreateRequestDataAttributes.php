<?php
/**
 * BetaGroupCreateRequestDataAttributes
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
 * BetaGroupCreateRequestDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BetaGroupCreateRequestDataAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BetaGroupCreateRequest_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'public_link_enabled' => 'bool',
        'public_link_limit_enabled' => 'bool',
        'public_link_limit' => 'int',
        'feedback_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'public_link_enabled' => null,
        'public_link_limit_enabled' => null,
        'public_link_limit' => null,
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
        'public_link_enabled' => 'publicLinkEnabled',
        'public_link_limit_enabled' => 'publicLinkLimitEnabled',
        'public_link_limit' => 'publicLinkLimit',
        'feedback_enabled' => 'feedbackEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'public_link_enabled' => 'setPublicLinkEnabled',
        'public_link_limit_enabled' => 'setPublicLinkLimitEnabled',
        'public_link_limit' => 'setPublicLinkLimit',
        'feedback_enabled' => 'setFeedbackEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'public_link_enabled' => 'getPublicLinkEnabled',
        'public_link_limit_enabled' => 'getPublicLinkLimitEnabled',
        'public_link_limit' => 'getPublicLinkLimit',
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
        $this->container['public_link_enabled'] = isset($data['public_link_enabled']) ? $data['public_link_enabled'] : null;
        $this->container['public_link_limit_enabled'] = isset($data['public_link_limit_enabled']) ? $data['public_link_limit_enabled'] : null;
        $this->container['public_link_limit'] = isset($data['public_link_limit']) ? $data['public_link_limit'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


