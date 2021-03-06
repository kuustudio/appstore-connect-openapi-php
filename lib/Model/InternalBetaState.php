<?php
/**
 * InternalBetaState
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
 * InternalBetaState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InternalBetaState
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'PROCESSING';
    const PROCESSING_EXCEPTION = 'PROCESSING_EXCEPTION';
    const MISSING_EXPORT_COMPLIANCE = 'MISSING_EXPORT_COMPLIANCE';
    const READY_FOR_BETA_TESTING = 'READY_FOR_BETA_TESTING';
    const IN_BETA_TESTING = 'IN_BETA_TESTING';
    const EXPIRED = 'EXPIRED';
    const IN_EXPORT_COMPLIANCE_REVIEW = 'IN_EXPORT_COMPLIANCE_REVIEW';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
            self::PROCESSING_EXCEPTION,
            self::MISSING_EXPORT_COMPLIANCE,
            self::READY_FOR_BETA_TESTING,
            self::IN_BETA_TESTING,
            self::EXPIRED,
            self::IN_EXPORT_COMPLIANCE_REVIEW,
        ];
    }
}


