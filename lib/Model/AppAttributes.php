<?php
/**
 * AppAttributes
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
 * AppAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'App_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'bundle_id' => 'string',
        'sku' => 'string',
        'primary_locale' => 'string',
        'is_or_ever_was_made_for_kids' => 'bool',
        'available_in_new_territories' => 'bool',
        'content_rights_declaration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'bundle_id' => null,
        'sku' => null,
        'primary_locale' => null,
        'is_or_ever_was_made_for_kids' => null,
        'available_in_new_territories' => null,
        'content_rights_declaration' => null
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
        'bundle_id' => 'bundleId',
        'sku' => 'sku',
        'primary_locale' => 'primaryLocale',
        'is_or_ever_was_made_for_kids' => 'isOrEverWasMadeForKids',
        'available_in_new_territories' => 'availableInNewTerritories',
        'content_rights_declaration' => 'contentRightsDeclaration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'bundle_id' => 'setBundleId',
        'sku' => 'setSku',
        'primary_locale' => 'setPrimaryLocale',
        'is_or_ever_was_made_for_kids' => 'setIsOrEverWasMadeForKids',
        'available_in_new_territories' => 'setAvailableInNewTerritories',
        'content_rights_declaration' => 'setContentRightsDeclaration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'bundle_id' => 'getBundleId',
        'sku' => 'getSku',
        'primary_locale' => 'getPrimaryLocale',
        'is_or_ever_was_made_for_kids' => 'getIsOrEverWasMadeForKids',
        'available_in_new_territories' => 'getAvailableInNewTerritories',
        'content_rights_declaration' => 'getContentRightsDeclaration'
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

    const CONTENT_RIGHTS_DECLARATION_DOES_NOT_USE_THIRD_PARTY_CONTENT = 'DOES_NOT_USE_THIRD_PARTY_CONTENT';
    const CONTENT_RIGHTS_DECLARATION_USES_THIRD_PARTY_CONTENT = 'USES_THIRD_PARTY_CONTENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentRightsDeclarationAllowableValues()
    {
        return [
            self::CONTENT_RIGHTS_DECLARATION_DOES_NOT_USE_THIRD_PARTY_CONTENT,
            self::CONTENT_RIGHTS_DECLARATION_USES_THIRD_PARTY_CONTENT,
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
        $this->container['bundle_id'] = isset($data['bundle_id']) ? $data['bundle_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['primary_locale'] = isset($data['primary_locale']) ? $data['primary_locale'] : null;
        $this->container['is_or_ever_was_made_for_kids'] = isset($data['is_or_ever_was_made_for_kids']) ? $data['is_or_ever_was_made_for_kids'] : null;
        $this->container['available_in_new_territories'] = isset($data['available_in_new_territories']) ? $data['available_in_new_territories'] : null;
        $this->container['content_rights_declaration'] = isset($data['content_rights_declaration']) ? $data['content_rights_declaration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContentRightsDeclarationAllowableValues();
        if (!is_null($this->container['content_rights_declaration']) && !in_array($this->container['content_rights_declaration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_rights_declaration', must be one of '%s'",
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
     * Gets bundle_id
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundle_id'];
    }

    /**
     * Sets bundle_id
     *
     * @param string|null $bundle_id bundle_id
     *
     * @return $this
     */
    public function setBundleId($bundle_id)
    {
        $this->container['bundle_id'] = $bundle_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets primary_locale
     *
     * @return string|null
     */
    public function getPrimaryLocale()
    {
        return $this->container['primary_locale'];
    }

    /**
     * Sets primary_locale
     *
     * @param string|null $primary_locale primary_locale
     *
     * @return $this
     */
    public function setPrimaryLocale($primary_locale)
    {
        $this->container['primary_locale'] = $primary_locale;

        return $this;
    }

    /**
     * Gets is_or_ever_was_made_for_kids
     *
     * @return bool|null
     */
    public function getIsOrEverWasMadeForKids()
    {
        return $this->container['is_or_ever_was_made_for_kids'];
    }

    /**
     * Sets is_or_ever_was_made_for_kids
     *
     * @param bool|null $is_or_ever_was_made_for_kids is_or_ever_was_made_for_kids
     *
     * @return $this
     */
    public function setIsOrEverWasMadeForKids($is_or_ever_was_made_for_kids)
    {
        $this->container['is_or_ever_was_made_for_kids'] = $is_or_ever_was_made_for_kids;

        return $this;
    }

    /**
     * Gets available_in_new_territories
     *
     * @return bool|null
     */
    public function getAvailableInNewTerritories()
    {
        return $this->container['available_in_new_territories'];
    }

    /**
     * Sets available_in_new_territories
     *
     * @param bool|null $available_in_new_territories available_in_new_territories
     *
     * @return $this
     */
    public function setAvailableInNewTerritories($available_in_new_territories)
    {
        $this->container['available_in_new_territories'] = $available_in_new_territories;

        return $this;
    }

    /**
     * Gets content_rights_declaration
     *
     * @return string|null
     */
    public function getContentRightsDeclaration()
    {
        return $this->container['content_rights_declaration'];
    }

    /**
     * Sets content_rights_declaration
     *
     * @param string|null $content_rights_declaration content_rights_declaration
     *
     * @return $this
     */
    public function setContentRightsDeclaration($content_rights_declaration)
    {
        $allowedValues = $this->getContentRightsDeclarationAllowableValues();
        if (!is_null($content_rights_declaration) && !in_array($content_rights_declaration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_rights_declaration', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_rights_declaration'] = $content_rights_declaration;

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


