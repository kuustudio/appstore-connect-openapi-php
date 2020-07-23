<?php
/**
 * AppStoreVersionLocalizationCreateRequestDataAttributes
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
 * AppStoreVersionLocalizationCreateRequestDataAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppStoreVersionLocalizationCreateRequestDataAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppStoreVersionLocalizationCreateRequest_data_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'locale' => 'string',
        'keywords' => 'string',
        'marketing_url' => 'string',
        'promotional_text' => 'string',
        'support_url' => 'string',
        'whats_new' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'description' => null,
        'locale' => null,
        'keywords' => null,
        'marketing_url' => 'uri',
        'promotional_text' => null,
        'support_url' => 'uri',
        'whats_new' => null
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
        'description' => 'description',
        'locale' => 'locale',
        'keywords' => 'keywords',
        'marketing_url' => 'marketingUrl',
        'promotional_text' => 'promotionalText',
        'support_url' => 'supportUrl',
        'whats_new' => 'whatsNew'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'locale' => 'setLocale',
        'keywords' => 'setKeywords',
        'marketing_url' => 'setMarketingUrl',
        'promotional_text' => 'setPromotionalText',
        'support_url' => 'setSupportUrl',
        'whats_new' => 'setWhatsNew'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'locale' => 'getLocale',
        'keywords' => 'getKeywords',
        'marketing_url' => 'getMarketingUrl',
        'promotional_text' => 'getPromotionalText',
        'support_url' => 'getSupportUrl',
        'whats_new' => 'getWhatsNew'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['marketing_url'] = isset($data['marketing_url']) ? $data['marketing_url'] : null;
        $this->container['promotional_text'] = isset($data['promotional_text']) ? $data['promotional_text'] : null;
        $this->container['support_url'] = isset($data['support_url']) ? $data['support_url'] : null;
        $this->container['whats_new'] = isset($data['whats_new']) ? $data['whats_new'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
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
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string|null $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * Gets promotional_text
     *
     * @return string|null
     */
    public function getPromotionalText()
    {
        return $this->container['promotional_text'];
    }

    /**
     * Sets promotional_text
     *
     * @param string|null $promotional_text promotional_text
     *
     * @return $this
     */
    public function setPromotionalText($promotional_text)
    {
        $this->container['promotional_text'] = $promotional_text;

        return $this;
    }

    /**
     * Gets support_url
     *
     * @return string|null
     */
    public function getSupportUrl()
    {
        return $this->container['support_url'];
    }

    /**
     * Sets support_url
     *
     * @param string|null $support_url support_url
     *
     * @return $this
     */
    public function setSupportUrl($support_url)
    {
        $this->container['support_url'] = $support_url;

        return $this;
    }

    /**
     * Gets whats_new
     *
     * @return string|null
     */
    public function getWhatsNew()
    {
        return $this->container['whats_new'];
    }

    /**
     * Sets whats_new
     *
     * @param string|null $whats_new whats_new
     *
     * @return $this
     */
    public function setWhatsNew($whats_new)
    {
        $this->container['whats_new'] = $whats_new;

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


