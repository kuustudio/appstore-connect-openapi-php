<?php
/**
 * CertificateType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * CertificateType Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CertificateType
{
    /**
     * Possible values of this enum
     */
    const IOS_DEVELOPMENT = 'IOS_DEVELOPMENT';
    const IOS_DISTRIBUTION = 'IOS_DISTRIBUTION';
    const MAC_APP_DISTRIBUTION = 'MAC_APP_DISTRIBUTION';
    const MAC_INSTALLER_DISTRIBUTION = 'MAC_INSTALLER_DISTRIBUTION';
    const MAC_APP_DEVELOPMENT = 'MAC_APP_DEVELOPMENT';
    const DEVELOPER_ID_KEXT = 'DEVELOPER_ID_KEXT';
    const DEVELOPER_ID_APPLICATION = 'DEVELOPER_ID_APPLICATION';
    const DEVELOPMENT = 'DEVELOPMENT';
    const DISTRIBUTION = 'DISTRIBUTION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IOS_DEVELOPMENT,
            self::IOS_DISTRIBUTION,
            self::MAC_APP_DISTRIBUTION,
            self::MAC_INSTALLER_DISTRIBUTION,
            self::MAC_APP_DEVELOPMENT,
            self::DEVELOPER_ID_KEXT,
            self::DEVELOPER_ID_APPLICATION,
            self::DEVELOPMENT,
            self::DISTRIBUTION,
        ];
    }
}


