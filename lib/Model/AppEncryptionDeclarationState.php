<?php
/**
 * AppEncryptionDeclarationState
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
 * AppEncryptionDeclarationState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppEncryptionDeclarationState
{
    /**
     * Possible values of this enum
     */
    const IN_REVIEW = 'IN_REVIEW';
    const APPROVED = 'APPROVED';
    const REJECTED = 'REJECTED';
    const INVALID = 'INVALID';
    const EXPIRED = 'EXPIRED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_REVIEW,
            self::APPROVED,
            self::REJECTED,
            self::INVALID,
            self::EXPIRED,
        ];
    }
}

