<?php
/**
 * AppStoreReviewDetailAttributes
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
 * AppStoreReviewDetailAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppStoreReviewDetailAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppStoreReviewDetail_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_first_name' => 'string',
        'contact_last_name' => 'string',
        'contact_phone' => 'string',
        'contact_email' => 'string',
        'demo_account_name' => 'string',
        'demo_account_password' => 'string',
        'demo_account_required' => 'bool',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_first_name' => null,
        'contact_last_name' => null,
        'contact_phone' => null,
        'contact_email' => null,
        'demo_account_name' => null,
        'demo_account_password' => null,
        'demo_account_required' => null,
        'notes' => null
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
        'contact_first_name' => 'contactFirstName',
        'contact_last_name' => 'contactLastName',
        'contact_phone' => 'contactPhone',
        'contact_email' => 'contactEmail',
        'demo_account_name' => 'demoAccountName',
        'demo_account_password' => 'demoAccountPassword',
        'demo_account_required' => 'demoAccountRequired',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'contact_phone' => 'setContactPhone',
        'contact_email' => 'setContactEmail',
        'demo_account_name' => 'setDemoAccountName',
        'demo_account_password' => 'setDemoAccountPassword',
        'demo_account_required' => 'setDemoAccountRequired',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'contact_phone' => 'getContactPhone',
        'contact_email' => 'getContactEmail',
        'demo_account_name' => 'getDemoAccountName',
        'demo_account_password' => 'getDemoAccountPassword',
        'demo_account_required' => 'getDemoAccountRequired',
        'notes' => 'getNotes'
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
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_email'] = isset($data['contact_email']) ? $data['contact_email'] : null;
        $this->container['demo_account_name'] = isset($data['demo_account_name']) ? $data['demo_account_name'] : null;
        $this->container['demo_account_password'] = isset($data['demo_account_password']) ? $data['demo_account_password'] : null;
        $this->container['demo_account_required'] = isset($data['demo_account_required']) ? $data['demo_account_required'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
     * Gets contact_first_name
     *
     * @return string|null
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param string|null $contact_first_name contact_first_name
     *
     * @return $this
     */
    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_last_name
     *
     * @return string|null
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param string|null $contact_last_name contact_last_name
     *
     * @return $this
     */
    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string|null $contact_phone contact_phone
     *
     * @return $this
     */
    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email contact_email
     *
     * @return $this
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets demo_account_name
     *
     * @return string|null
     */
    public function getDemoAccountName()
    {
        return $this->container['demo_account_name'];
    }

    /**
     * Sets demo_account_name
     *
     * @param string|null $demo_account_name demo_account_name
     *
     * @return $this
     */
    public function setDemoAccountName($demo_account_name)
    {
        $this->container['demo_account_name'] = $demo_account_name;

        return $this;
    }

    /**
     * Gets demo_account_password
     *
     * @return string|null
     */
    public function getDemoAccountPassword()
    {
        return $this->container['demo_account_password'];
    }

    /**
     * Sets demo_account_password
     *
     * @param string|null $demo_account_password demo_account_password
     *
     * @return $this
     */
    public function setDemoAccountPassword($demo_account_password)
    {
        $this->container['demo_account_password'] = $demo_account_password;

        return $this;
    }

    /**
     * Gets demo_account_required
     *
     * @return bool|null
     */
    public function getDemoAccountRequired()
    {
        return $this->container['demo_account_required'];
    }

    /**
     * Sets demo_account_required
     *
     * @param bool|null $demo_account_required demo_account_required
     *
     * @return $this
     */
    public function setDemoAccountRequired($demo_account_required)
    {
        $this->container['demo_account_required'] = $demo_account_required;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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


