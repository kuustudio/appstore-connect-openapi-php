<?php
/**
 * BuildAttributes
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
 * BuildAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuildAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Build_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'uploaded_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'expired' => 'bool',
        'min_os_version' => 'string',
        'icon_asset_token' => '\OpenAPI\Client\Model\ImageAsset',
        'processing_state' => 'string',
        'uses_non_exempt_encryption' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'version' => null,
        'uploaded_date' => 'date-time',
        'expiration_date' => 'date-time',
        'expired' => null,
        'min_os_version' => null,
        'icon_asset_token' => null,
        'processing_state' => null,
        'uses_non_exempt_encryption' => null
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
        'version' => 'version',
        'uploaded_date' => 'uploadedDate',
        'expiration_date' => 'expirationDate',
        'expired' => 'expired',
        'min_os_version' => 'minOsVersion',
        'icon_asset_token' => 'iconAssetToken',
        'processing_state' => 'processingState',
        'uses_non_exempt_encryption' => 'usesNonExemptEncryption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'uploaded_date' => 'setUploadedDate',
        'expiration_date' => 'setExpirationDate',
        'expired' => 'setExpired',
        'min_os_version' => 'setMinOsVersion',
        'icon_asset_token' => 'setIconAssetToken',
        'processing_state' => 'setProcessingState',
        'uses_non_exempt_encryption' => 'setUsesNonExemptEncryption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'uploaded_date' => 'getUploadedDate',
        'expiration_date' => 'getExpirationDate',
        'expired' => 'getExpired',
        'min_os_version' => 'getMinOsVersion',
        'icon_asset_token' => 'getIconAssetToken',
        'processing_state' => 'getProcessingState',
        'uses_non_exempt_encryption' => 'getUsesNonExemptEncryption'
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

    const PROCESSING_STATE_PROCESSING = 'PROCESSING';
    const PROCESSING_STATE_FAILED = 'FAILED';
    const PROCESSING_STATE_INVALID = 'INVALID';
    const PROCESSING_STATE_VALID = 'VALID';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStateAllowableValues()
    {
        return [
            self::PROCESSING_STATE_PROCESSING,
            self::PROCESSING_STATE_FAILED,
            self::PROCESSING_STATE_INVALID,
            self::PROCESSING_STATE_VALID,
        ];
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['uploaded_date'] = isset($data['uploaded_date']) ? $data['uploaded_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['min_os_version'] = isset($data['min_os_version']) ? $data['min_os_version'] : null;
        $this->container['icon_asset_token'] = isset($data['icon_asset_token']) ? $data['icon_asset_token'] : null;
        $this->container['processing_state'] = isset($data['processing_state']) ? $data['processing_state'] : null;
        $this->container['uses_non_exempt_encryption'] = isset($data['uses_non_exempt_encryption']) ? $data['uses_non_exempt_encryption'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProcessingStateAllowableValues();
        if (!is_null($this->container['processing_state']) && !in_array($this->container['processing_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets uploaded_date
     *
     * @return \DateTime|null
     */
    public function getUploadedDate()
    {
        return $this->container['uploaded_date'];
    }

    /**
     * Sets uploaded_date
     *
     * @param \DateTime|null $uploaded_date uploaded_date
     *
     * @return $this
     */
    public function setUploadedDate($uploaded_date)
    {
        $this->container['uploaded_date'] = $uploaded_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return bool|null
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param bool|null $expired expired
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

        return $this;
    }

    /**
     * Gets min_os_version
     *
     * @return string|null
     */
    public function getMinOsVersion()
    {
        return $this->container['min_os_version'];
    }

    /**
     * Sets min_os_version
     *
     * @param string|null $min_os_version min_os_version
     *
     * @return $this
     */
    public function setMinOsVersion($min_os_version)
    {
        $this->container['min_os_version'] = $min_os_version;

        return $this;
    }

    /**
     * Gets icon_asset_token
     *
     * @return \OpenAPI\Client\Model\ImageAsset|null
     */
    public function getIconAssetToken()
    {
        return $this->container['icon_asset_token'];
    }

    /**
     * Sets icon_asset_token
     *
     * @param \OpenAPI\Client\Model\ImageAsset|null $icon_asset_token icon_asset_token
     *
     * @return $this
     */
    public function setIconAssetToken($icon_asset_token)
    {
        $this->container['icon_asset_token'] = $icon_asset_token;

        return $this;
    }

    /**
     * Gets processing_state
     *
     * @return string|null
     */
    public function getProcessingState()
    {
        return $this->container['processing_state'];
    }

    /**
     * Sets processing_state
     *
     * @param string|null $processing_state processing_state
     *
     * @return $this
     */
    public function setProcessingState($processing_state)
    {
        $allowedValues = $this->getProcessingStateAllowableValues();
        if (!is_null($processing_state) && !in_array($processing_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_state'] = $processing_state;

        return $this;
    }

    /**
     * Gets uses_non_exempt_encryption
     *
     * @return bool|null
     */
    public function getUsesNonExemptEncryption()
    {
        return $this->container['uses_non_exempt_encryption'];
    }

    /**
     * Sets uses_non_exempt_encryption
     *
     * @param bool|null $uses_non_exempt_encryption uses_non_exempt_encryption
     *
     * @return $this
     */
    public function setUsesNonExemptEncryption($uses_non_exempt_encryption)
    {
        $this->container['uses_non_exempt_encryption'] = $uses_non_exempt_encryption;

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


