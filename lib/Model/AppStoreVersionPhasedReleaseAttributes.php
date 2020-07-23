<?php
/**
 * AppStoreVersionPhasedReleaseAttributes
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
 * AppStoreVersionPhasedReleaseAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppStoreVersionPhasedReleaseAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppStoreVersionPhasedRelease_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phased_release_state' => '\OpenAPI\Client\Model\PhasedReleaseState',
        'start_date' => '\DateTime',
        'total_pause_duration' => 'int',
        'current_day_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'phased_release_state' => null,
        'start_date' => 'date-time',
        'total_pause_duration' => null,
        'current_day_number' => null
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
        'phased_release_state' => 'phasedReleaseState',
        'start_date' => 'startDate',
        'total_pause_duration' => 'totalPauseDuration',
        'current_day_number' => 'currentDayNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phased_release_state' => 'setPhasedReleaseState',
        'start_date' => 'setStartDate',
        'total_pause_duration' => 'setTotalPauseDuration',
        'current_day_number' => 'setCurrentDayNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phased_release_state' => 'getPhasedReleaseState',
        'start_date' => 'getStartDate',
        'total_pause_duration' => 'getTotalPauseDuration',
        'current_day_number' => 'getCurrentDayNumber'
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
        $this->container['phased_release_state'] = isset($data['phased_release_state']) ? $data['phased_release_state'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['total_pause_duration'] = isset($data['total_pause_duration']) ? $data['total_pause_duration'] : null;
        $this->container['current_day_number'] = isset($data['current_day_number']) ? $data['current_day_number'] : null;
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
     * Gets phased_release_state
     *
     * @return \OpenAPI\Client\Model\PhasedReleaseState|null
     */
    public function getPhasedReleaseState()
    {
        return $this->container['phased_release_state'];
    }

    /**
     * Sets phased_release_state
     *
     * @param \OpenAPI\Client\Model\PhasedReleaseState|null $phased_release_state phased_release_state
     *
     * @return $this
     */
    public function setPhasedReleaseState($phased_release_state)
    {
        $this->container['phased_release_state'] = $phased_release_state;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets total_pause_duration
     *
     * @return int|null
     */
    public function getTotalPauseDuration()
    {
        return $this->container['total_pause_duration'];
    }

    /**
     * Sets total_pause_duration
     *
     * @param int|null $total_pause_duration total_pause_duration
     *
     * @return $this
     */
    public function setTotalPauseDuration($total_pause_duration)
    {
        $this->container['total_pause_duration'] = $total_pause_duration;

        return $this;
    }

    /**
     * Gets current_day_number
     *
     * @return int|null
     */
    public function getCurrentDayNumber()
    {
        return $this->container['current_day_number'];
    }

    /**
     * Sets current_day_number
     *
     * @param int|null $current_day_number current_day_number
     *
     * @return $this
     */
    public function setCurrentDayNumber($current_day_number)
    {
        $this->container['current_day_number'] = $current_day_number;

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

