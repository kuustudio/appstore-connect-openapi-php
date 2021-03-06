<?php
/**
 * AppRelationships
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
 * AppRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'App_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'beta_groups' => '\OpenAPI\Client\Model\AppRelationshipsBetaGroups',
        'app_store_versions' => '\OpenAPI\Client\Model\AppRelationshipsAppStoreVersions',
        'pre_release_versions' => '\OpenAPI\Client\Model\AppRelationshipsPreReleaseVersions',
        'beta_app_localizations' => '\OpenAPI\Client\Model\AppRelationshipsBetaAppLocalizations',
        'builds' => '\OpenAPI\Client\Model\AppRelationshipsBuilds',
        'beta_license_agreement' => '\OpenAPI\Client\Model\AppRelationshipsBetaLicenseAgreement',
        'beta_app_review_detail' => '\OpenAPI\Client\Model\AppRelationshipsBetaAppReviewDetail',
        'app_infos' => '\OpenAPI\Client\Model\AppRelationshipsAppInfos',
        'end_user_license_agreement' => '\OpenAPI\Client\Model\AppRelationshipsEndUserLicenseAgreement',
        'pre_order' => '\OpenAPI\Client\Model\AppRelationshipsPreOrder',
        'prices' => '\OpenAPI\Client\Model\AppRelationshipsPrices',
        'available_territories' => '\OpenAPI\Client\Model\AppRelationshipsAvailableTerritories',
        'in_app_purchases' => '\OpenAPI\Client\Model\AppRelationshipsInAppPurchases',
        'game_center_enabled_versions' => '\OpenAPI\Client\Model\AppRelationshipsGameCenterEnabledVersions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'beta_groups' => null,
        'app_store_versions' => null,
        'pre_release_versions' => null,
        'beta_app_localizations' => null,
        'builds' => null,
        'beta_license_agreement' => null,
        'beta_app_review_detail' => null,
        'app_infos' => null,
        'end_user_license_agreement' => null,
        'pre_order' => null,
        'prices' => null,
        'available_territories' => null,
        'in_app_purchases' => null,
        'game_center_enabled_versions' => null
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
        'beta_groups' => 'betaGroups',
        'app_store_versions' => 'appStoreVersions',
        'pre_release_versions' => 'preReleaseVersions',
        'beta_app_localizations' => 'betaAppLocalizations',
        'builds' => 'builds',
        'beta_license_agreement' => 'betaLicenseAgreement',
        'beta_app_review_detail' => 'betaAppReviewDetail',
        'app_infos' => 'appInfos',
        'end_user_license_agreement' => 'endUserLicenseAgreement',
        'pre_order' => 'preOrder',
        'prices' => 'prices',
        'available_territories' => 'availableTerritories',
        'in_app_purchases' => 'inAppPurchases',
        'game_center_enabled_versions' => 'gameCenterEnabledVersions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'beta_groups' => 'setBetaGroups',
        'app_store_versions' => 'setAppStoreVersions',
        'pre_release_versions' => 'setPreReleaseVersions',
        'beta_app_localizations' => 'setBetaAppLocalizations',
        'builds' => 'setBuilds',
        'beta_license_agreement' => 'setBetaLicenseAgreement',
        'beta_app_review_detail' => 'setBetaAppReviewDetail',
        'app_infos' => 'setAppInfos',
        'end_user_license_agreement' => 'setEndUserLicenseAgreement',
        'pre_order' => 'setPreOrder',
        'prices' => 'setPrices',
        'available_territories' => 'setAvailableTerritories',
        'in_app_purchases' => 'setInAppPurchases',
        'game_center_enabled_versions' => 'setGameCenterEnabledVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'beta_groups' => 'getBetaGroups',
        'app_store_versions' => 'getAppStoreVersions',
        'pre_release_versions' => 'getPreReleaseVersions',
        'beta_app_localizations' => 'getBetaAppLocalizations',
        'builds' => 'getBuilds',
        'beta_license_agreement' => 'getBetaLicenseAgreement',
        'beta_app_review_detail' => 'getBetaAppReviewDetail',
        'app_infos' => 'getAppInfos',
        'end_user_license_agreement' => 'getEndUserLicenseAgreement',
        'pre_order' => 'getPreOrder',
        'prices' => 'getPrices',
        'available_territories' => 'getAvailableTerritories',
        'in_app_purchases' => 'getInAppPurchases',
        'game_center_enabled_versions' => 'getGameCenterEnabledVersions'
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
        $this->container['beta_groups'] = isset($data['beta_groups']) ? $data['beta_groups'] : null;
        $this->container['app_store_versions'] = isset($data['app_store_versions']) ? $data['app_store_versions'] : null;
        $this->container['pre_release_versions'] = isset($data['pre_release_versions']) ? $data['pre_release_versions'] : null;
        $this->container['beta_app_localizations'] = isset($data['beta_app_localizations']) ? $data['beta_app_localizations'] : null;
        $this->container['builds'] = isset($data['builds']) ? $data['builds'] : null;
        $this->container['beta_license_agreement'] = isset($data['beta_license_agreement']) ? $data['beta_license_agreement'] : null;
        $this->container['beta_app_review_detail'] = isset($data['beta_app_review_detail']) ? $data['beta_app_review_detail'] : null;
        $this->container['app_infos'] = isset($data['app_infos']) ? $data['app_infos'] : null;
        $this->container['end_user_license_agreement'] = isset($data['end_user_license_agreement']) ? $data['end_user_license_agreement'] : null;
        $this->container['pre_order'] = isset($data['pre_order']) ? $data['pre_order'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['available_territories'] = isset($data['available_territories']) ? $data['available_territories'] : null;
        $this->container['in_app_purchases'] = isset($data['in_app_purchases']) ? $data['in_app_purchases'] : null;
        $this->container['game_center_enabled_versions'] = isset($data['game_center_enabled_versions']) ? $data['game_center_enabled_versions'] : null;
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
     * Gets beta_groups
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsBetaGroups|null
     */
    public function getBetaGroups()
    {
        return $this->container['beta_groups'];
    }

    /**
     * Sets beta_groups
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsBetaGroups|null $beta_groups beta_groups
     *
     * @return $this
     */
    public function setBetaGroups($beta_groups)
    {
        $this->container['beta_groups'] = $beta_groups;

        return $this;
    }

    /**
     * Gets app_store_versions
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsAppStoreVersions|null
     */
    public function getAppStoreVersions()
    {
        return $this->container['app_store_versions'];
    }

    /**
     * Sets app_store_versions
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsAppStoreVersions|null $app_store_versions app_store_versions
     *
     * @return $this
     */
    public function setAppStoreVersions($app_store_versions)
    {
        $this->container['app_store_versions'] = $app_store_versions;

        return $this;
    }

    /**
     * Gets pre_release_versions
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsPreReleaseVersions|null
     */
    public function getPreReleaseVersions()
    {
        return $this->container['pre_release_versions'];
    }

    /**
     * Sets pre_release_versions
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsPreReleaseVersions|null $pre_release_versions pre_release_versions
     *
     * @return $this
     */
    public function setPreReleaseVersions($pre_release_versions)
    {
        $this->container['pre_release_versions'] = $pre_release_versions;

        return $this;
    }

    /**
     * Gets beta_app_localizations
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsBetaAppLocalizations|null
     */
    public function getBetaAppLocalizations()
    {
        return $this->container['beta_app_localizations'];
    }

    /**
     * Sets beta_app_localizations
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsBetaAppLocalizations|null $beta_app_localizations beta_app_localizations
     *
     * @return $this
     */
    public function setBetaAppLocalizations($beta_app_localizations)
    {
        $this->container['beta_app_localizations'] = $beta_app_localizations;

        return $this;
    }

    /**
     * Gets builds
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsBuilds|null
     */
    public function getBuilds()
    {
        return $this->container['builds'];
    }

    /**
     * Sets builds
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsBuilds|null $builds builds
     *
     * @return $this
     */
    public function setBuilds($builds)
    {
        $this->container['builds'] = $builds;

        return $this;
    }

    /**
     * Gets beta_license_agreement
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsBetaLicenseAgreement|null
     */
    public function getBetaLicenseAgreement()
    {
        return $this->container['beta_license_agreement'];
    }

    /**
     * Sets beta_license_agreement
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsBetaLicenseAgreement|null $beta_license_agreement beta_license_agreement
     *
     * @return $this
     */
    public function setBetaLicenseAgreement($beta_license_agreement)
    {
        $this->container['beta_license_agreement'] = $beta_license_agreement;

        return $this;
    }

    /**
     * Gets beta_app_review_detail
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsBetaAppReviewDetail|null
     */
    public function getBetaAppReviewDetail()
    {
        return $this->container['beta_app_review_detail'];
    }

    /**
     * Sets beta_app_review_detail
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsBetaAppReviewDetail|null $beta_app_review_detail beta_app_review_detail
     *
     * @return $this
     */
    public function setBetaAppReviewDetail($beta_app_review_detail)
    {
        $this->container['beta_app_review_detail'] = $beta_app_review_detail;

        return $this;
    }

    /**
     * Gets app_infos
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsAppInfos|null
     */
    public function getAppInfos()
    {
        return $this->container['app_infos'];
    }

    /**
     * Sets app_infos
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsAppInfos|null $app_infos app_infos
     *
     * @return $this
     */
    public function setAppInfos($app_infos)
    {
        $this->container['app_infos'] = $app_infos;

        return $this;
    }

    /**
     * Gets end_user_license_agreement
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsEndUserLicenseAgreement|null
     */
    public function getEndUserLicenseAgreement()
    {
        return $this->container['end_user_license_agreement'];
    }

    /**
     * Sets end_user_license_agreement
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsEndUserLicenseAgreement|null $end_user_license_agreement end_user_license_agreement
     *
     * @return $this
     */
    public function setEndUserLicenseAgreement($end_user_license_agreement)
    {
        $this->container['end_user_license_agreement'] = $end_user_license_agreement;

        return $this;
    }

    /**
     * Gets pre_order
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsPreOrder|null
     */
    public function getPreOrder()
    {
        return $this->container['pre_order'];
    }

    /**
     * Sets pre_order
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsPreOrder|null $pre_order pre_order
     *
     * @return $this
     */
    public function setPreOrder($pre_order)
    {
        $this->container['pre_order'] = $pre_order;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsPrices|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsPrices|null $prices prices
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets available_territories
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsAvailableTerritories|null
     */
    public function getAvailableTerritories()
    {
        return $this->container['available_territories'];
    }

    /**
     * Sets available_territories
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsAvailableTerritories|null $available_territories available_territories
     *
     * @return $this
     */
    public function setAvailableTerritories($available_territories)
    {
        $this->container['available_territories'] = $available_territories;

        return $this;
    }

    /**
     * Gets in_app_purchases
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsInAppPurchases|null
     */
    public function getInAppPurchases()
    {
        return $this->container['in_app_purchases'];
    }

    /**
     * Sets in_app_purchases
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsInAppPurchases|null $in_app_purchases in_app_purchases
     *
     * @return $this
     */
    public function setInAppPurchases($in_app_purchases)
    {
        $this->container['in_app_purchases'] = $in_app_purchases;

        return $this;
    }

    /**
     * Gets game_center_enabled_versions
     *
     * @return \OpenAPI\Client\Model\AppRelationshipsGameCenterEnabledVersions|null
     */
    public function getGameCenterEnabledVersions()
    {
        return $this->container['game_center_enabled_versions'];
    }

    /**
     * Sets game_center_enabled_versions
     *
     * @param \OpenAPI\Client\Model\AppRelationshipsGameCenterEnabledVersions|null $game_center_enabled_versions game_center_enabled_versions
     *
     * @return $this
     */
    public function setGameCenterEnabledVersions($game_center_enabled_versions)
    {
        $this->container['game_center_enabled_versions'] = $game_center_enabled_versions;

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


