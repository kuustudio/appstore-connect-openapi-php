<?php
/**
 * BetaAppLocalizationUpdateRequestDataAttributes
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
 * BetaAppLocalizationUpdateRequestDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BetaAppLocalizationUpdateRequestDataAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BetaAppLocalizationUpdateRequest_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedback_email' => 'string',
        'marketing_url' => 'string',
        'privacy_policy_url' => 'string',
        'tv_os_privacy_policy' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'feedback_email' => null,
        'marketing_url' => null,
        'privacy_policy_url' => null,
        'tv_os_privacy_policy' => null,
        'description' => null
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
        'feedback_email' => 'feedbackEmail',
        'marketing_url' => 'marketingUrl',
        'privacy_policy_url' => 'privacyPolicyUrl',
        'tv_os_privacy_policy' => 'tvOsPrivacyPolicy',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedback_email' => 'setFeedbackEmail',
        'marketing_url' => 'setMarketingUrl',
        'privacy_policy_url' => 'setPrivacyPolicyUrl',
        'tv_os_privacy_policy' => 'setTvOsPrivacyPolicy',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedback_email' => 'getFeedbackEmail',
        'marketing_url' => 'getMarketingUrl',
        'privacy_policy_url' => 'getPrivacyPolicyUrl',
        'tv_os_privacy_policy' => 'getTvOsPrivacyPolicy',
        'description' => 'getDescription'
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
        $this->container['feedback_email'] = isset($data['feedback_email']) ? $data['feedback_email'] : null;
        $this->container['marketing_url'] = isset($data['marketing_url']) ? $data['marketing_url'] : null;
        $this->container['privacy_policy_url'] = isset($data['privacy_policy_url']) ? $data['privacy_policy_url'] : null;
        $this->container['tv_os_privacy_policy'] = isset($data['tv_os_privacy_policy']) ? $data['tv_os_privacy_policy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets feedback_email
     *
     * @return string|null
     */
    public function getFeedbackEmail()
    {
        return $this->container['feedback_email'];
    }

    /**
     * Sets feedback_email
     *
     * @param string|null $feedback_email feedback_email
     *
     * @return $this
     */
    public function setFeedbackEmail($feedback_email)
    {
        $this->container['feedback_email'] = $feedback_email;

        return $this;
    }

    /**
     * Gets marketing_url
     *
     * @return string|null
     */
    public function getMarketingUrl()
    {
        return $this->container['marketing_url'];
    }

    /**
     * Sets marketing_url
     *
     * @param string|null $marketing_url marketing_url
     *
     * @return $this
     */
    public function setMarketingUrl($marketing_url)
    {
        $this->container['marketing_url'] = $marketing_url;

        return $this;
    }

    /**
     * Gets privacy_policy_url
     *
     * @return string|null
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacy_policy_url'];
    }

    /**
     * Sets privacy_policy_url
     *
     * @param string|null $privacy_policy_url privacy_policy_url
     *
     * @return $this
     */
    public function setPrivacyPolicyUrl($privacy_policy_url)
    {
        $this->container['privacy_policy_url'] = $privacy_policy_url;

        return $this;
    }

    /**
     * Gets tv_os_privacy_policy
     *
     * @return string|null
     */
    public function getTvOsPrivacyPolicy()
    {
        return $this->container['tv_os_privacy_policy'];
    }

    /**
     * Sets tv_os_privacy_policy
     *
     * @param string|null $tv_os_privacy_policy tv_os_privacy_policy
     *
     * @return $this
     */
    public function setTvOsPrivacyPolicy($tv_os_privacy_policy)
    {
        $this->container['tv_os_privacy_policy'] = $tv_os_privacy_policy;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


