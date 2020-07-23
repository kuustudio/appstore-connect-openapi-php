<?php
/**
 * ProfileAttributes
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
 * ProfileAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProfileAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Profile_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'platform' => '\OpenAPI\Client\Model\BundleIdPlatform',
        'profile_type' => 'string',
        'profile_state' => 'string',
        'profile_content' => 'string',
        'uuid' => 'string',
        'created_date' => '\DateTime',
        'expiration_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'platform' => null,
        'profile_type' => null,
        'profile_state' => null,
        'profile_content' => null,
        'uuid' => null,
        'created_date' => 'date-time',
        'expiration_date' => 'date-time'
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
        'platform' => 'platform',
        'profile_type' => 'profileType',
        'profile_state' => 'profileState',
        'profile_content' => 'profileContent',
        'uuid' => 'uuid',
        'created_date' => 'createdDate',
        'expiration_date' => 'expirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'platform' => 'setPlatform',
        'profile_type' => 'setProfileType',
        'profile_state' => 'setProfileState',
        'profile_content' => 'setProfileContent',
        'uuid' => 'setUuid',
        'created_date' => 'setCreatedDate',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'platform' => 'getPlatform',
        'profile_type' => 'getProfileType',
        'profile_state' => 'getProfileState',
        'profile_content' => 'getProfileContent',
        'uuid' => 'getUuid',
        'created_date' => 'getCreatedDate',
        'expiration_date' => 'getExpirationDate'
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

    const PROFILE_TYPE_IOS_APP_DEVELOPMENT = 'IOS_APP_DEVELOPMENT';
    const PROFILE_TYPE_IOS_APP_STORE = 'IOS_APP_STORE';
    const PROFILE_TYPE_IOS_APP_ADHOC = 'IOS_APP_ADHOC';
    const PROFILE_TYPE_IOS_APP_INHOUSE = 'IOS_APP_INHOUSE';
    const PROFILE_TYPE_MAC_APP_DEVELOPMENT = 'MAC_APP_DEVELOPMENT';
    const PROFILE_TYPE_MAC_APP_STORE = 'MAC_APP_STORE';
    const PROFILE_TYPE_MAC_APP_DIRECT = 'MAC_APP_DIRECT';
    const PROFILE_TYPE_TVOS_APP_DEVELOPMENT = 'TVOS_APP_DEVELOPMENT';
    const PROFILE_TYPE_TVOS_APP_STORE = 'TVOS_APP_STORE';
    const PROFILE_TYPE_TVOS_APP_ADHOC = 'TVOS_APP_ADHOC';
    const PROFILE_TYPE_TVOS_APP_INHOUSE = 'TVOS_APP_INHOUSE';
    const PROFILE_TYPE_MAC_CATALYST_APP_DEVELOPMENT = 'MAC_CATALYST_APP_DEVELOPMENT';
    const PROFILE_TYPE_MAC_CATALYST_APP_STORE = 'MAC_CATALYST_APP_STORE';
    const PROFILE_TYPE_MAC_CATALYST_APP_DIRECT = 'MAC_CATALYST_APP_DIRECT';
    const PROFILE_STATE_ACTIVE = 'ACTIVE';
    const PROFILE_STATE_INVALID = 'INVALID';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileTypeAllowableValues()
    {
        return [
            self::PROFILE_TYPE_IOS_APP_DEVELOPMENT,
            self::PROFILE_TYPE_IOS_APP_STORE,
            self::PROFILE_TYPE_IOS_APP_ADHOC,
            self::PROFILE_TYPE_IOS_APP_INHOUSE,
            self::PROFILE_TYPE_MAC_APP_DEVELOPMENT,
            self::PROFILE_TYPE_MAC_APP_STORE,
            self::PROFILE_TYPE_MAC_APP_DIRECT,
            self::PROFILE_TYPE_TVOS_APP_DEVELOPMENT,
            self::PROFILE_TYPE_TVOS_APP_STORE,
            self::PROFILE_TYPE_TVOS_APP_ADHOC,
            self::PROFILE_TYPE_TVOS_APP_INHOUSE,
            self::PROFILE_TYPE_MAC_CATALYST_APP_DEVELOPMENT,
            self::PROFILE_TYPE_MAC_CATALYST_APP_STORE,
            self::PROFILE_TYPE_MAC_CATALYST_APP_DIRECT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileStateAllowableValues()
    {
        return [
            self::PROFILE_STATE_ACTIVE,
            self::PROFILE_STATE_INVALID,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['profile_type'] = isset($data['profile_type']) ? $data['profile_type'] : null;
        $this->container['profile_state'] = isset($data['profile_state']) ? $data['profile_state'] : null;
        $this->container['profile_content'] = isset($data['profile_content']) ? $data['profile_content'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($this->container['profile_type']) && !in_array($this->container['profile_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProfileStateAllowableValues();
        if (!is_null($this->container['profile_state']) && !in_array($this->container['profile_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile_state', must be one of '%s'",
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
     * Gets platform
     *
     * @return \OpenAPI\Client\Model\BundleIdPlatform|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param \OpenAPI\Client\Model\BundleIdPlatform|null $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets profile_type
     *
     * @return string|null
     */
    public function getProfileType()
    {
        return $this->container['profile_type'];
    }

    /**
     * Sets profile_type
     *
     * @param string|null $profile_type profile_type
     *
     * @return $this
     */
    public function setProfileType($profile_type)
    {
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($profile_type) && !in_array($profile_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile_type'] = $profile_type;

        return $this;
    }

    /**
     * Gets profile_state
     *
     * @return string|null
     */
    public function getProfileState()
    {
        return $this->container['profile_state'];
    }

    /**
     * Sets profile_state
     *
     * @param string|null $profile_state profile_state
     *
     * @return $this
     */
    public function setProfileState($profile_state)
    {
        $allowedValues = $this->getProfileStateAllowableValues();
        if (!is_null($profile_state) && !in_array($profile_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile_state'] = $profile_state;

        return $this;
    }

    /**
     * Gets profile_content
     *
     * @return string|null
     */
    public function getProfileContent()
    {
        return $this->container['profile_content'];
    }

    /**
     * Sets profile_content
     *
     * @param string|null $profile_content profile_content
     *
     * @return $this
     */
    public function setProfileContent($profile_content)
    {
        $this->container['profile_content'] = $profile_content;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


