<?php
/**
 * AppStoreVersionState
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
 * AppStoreVersionState Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppStoreVersionState
{
    /**
     * Possible values of this enum
     */
    const DEVELOPER_REMOVED_FROM_SALE = 'DEVELOPER_REMOVED_FROM_SALE';
    const DEVELOPER_REJECTED = 'DEVELOPER_REJECTED';
    const IN_REVIEW = 'IN_REVIEW';
    const INVALID_BINARY = 'INVALID_BINARY';
    const METADATA_REJECTED = 'METADATA_REJECTED';
    const PENDING_APPLE_RELEASE = 'PENDING_APPLE_RELEASE';
    const PENDING_CONTRACT = 'PENDING_CONTRACT';
    const PENDING_DEVELOPER_RELEASE = 'PENDING_DEVELOPER_RELEASE';
    const PREPARE_FOR_SUBMISSION = 'PREPARE_FOR_SUBMISSION';
    const PREORDER_READY_FOR_SALE = 'PREORDER_READY_FOR_SALE';
    const PROCESSING_FOR_APP_STORE = 'PROCESSING_FOR_APP_STORE';
    const READY_FOR_SALE = 'READY_FOR_SALE';
    const REJECTED = 'REJECTED';
    const REMOVED_FROM_SALE = 'REMOVED_FROM_SALE';
    const WAITING_FOR_EXPORT_COMPLIANCE = 'WAITING_FOR_EXPORT_COMPLIANCE';
    const WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    const REPLACED_WITH_NEW_VERSION = 'REPLACED_WITH_NEW_VERSION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEVELOPER_REMOVED_FROM_SALE,
            self::DEVELOPER_REJECTED,
            self::IN_REVIEW,
            self::INVALID_BINARY,
            self::METADATA_REJECTED,
            self::PENDING_APPLE_RELEASE,
            self::PENDING_CONTRACT,
            self::PENDING_DEVELOPER_RELEASE,
            self::PREPARE_FOR_SUBMISSION,
            self::PREORDER_READY_FOR_SALE,
            self::PROCESSING_FOR_APP_STORE,
            self::READY_FOR_SALE,
            self::REJECTED,
            self::REMOVED_FROM_SALE,
            self::WAITING_FOR_EXPORT_COMPLIANCE,
            self::WAITING_FOR_REVIEW,
            self::REPLACED_WITH_NEW_VERSION,
        ];
    }
}

