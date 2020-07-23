<?php
/**
 * UserRole
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
 * UserRole Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserRole
{
    /**
     * Possible values of this enum
     */
    const ADMIN = 'ADMIN';
    const FINANCE = 'FINANCE';
    const TECHNICAL = 'TECHNICAL';
    const ACCOUNT_HOLDER = 'ACCOUNT_HOLDER';
    const READ_ONLY = 'READ_ONLY';
    const SALES = 'SALES';
    const MARKETING = 'MARKETING';
    const APP_MANAGER = 'APP_MANAGER';
    const DEVELOPER = 'DEVELOPER';
    const ACCESS_TO_REPORTS = 'ACCESS_TO_REPORTS';
    const CUSTOMER_SUPPORT = 'CUSTOMER_SUPPORT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADMIN,
            self::FINANCE,
            self::TECHNICAL,
            self::ACCOUNT_HOLDER,
            self::READ_ONLY,
            self::SALES,
            self::MARKETING,
            self::APP_MANAGER,
            self::DEVELOPER,
            self::ACCESS_TO_REPORTS,
            self::CUSTOMER_SUPPORT,
        ];
    }
}


