<?php
/**
 * AppPreviewAttributes
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
 * AppPreviewAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AppPreviewAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppPreview_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_size' => 'int',
        'file_name' => 'string',
        'source_file_checksum' => 'string',
        'preview_frame_time_code' => 'string',
        'mime_type' => 'string',
        'video_url' => 'string',
        'preview_image' => '\OpenAPI\Client\Model\ImageAsset',
        'upload_operations' => '\OpenAPI\Client\Model\UploadOperation[]',
        'asset_delivery_state' => '\OpenAPI\Client\Model\AppMediaAssetState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file_size' => null,
        'file_name' => null,
        'source_file_checksum' => null,
        'preview_frame_time_code' => null,
        'mime_type' => null,
        'video_url' => null,
        'preview_image' => null,
        'upload_operations' => null,
        'asset_delivery_state' => null
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
        'file_size' => 'fileSize',
        'file_name' => 'fileName',
        'source_file_checksum' => 'sourceFileChecksum',
        'preview_frame_time_code' => 'previewFrameTimeCode',
        'mime_type' => 'mimeType',
        'video_url' => 'videoUrl',
        'preview_image' => 'previewImage',
        'upload_operations' => 'uploadOperations',
        'asset_delivery_state' => 'assetDeliveryState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'file_name' => 'setFileName',
        'source_file_checksum' => 'setSourceFileChecksum',
        'preview_frame_time_code' => 'setPreviewFrameTimeCode',
        'mime_type' => 'setMimeType',
        'video_url' => 'setVideoUrl',
        'preview_image' => 'setPreviewImage',
        'upload_operations' => 'setUploadOperations',
        'asset_delivery_state' => 'setAssetDeliveryState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'file_name' => 'getFileName',
        'source_file_checksum' => 'getSourceFileChecksum',
        'preview_frame_time_code' => 'getPreviewFrameTimeCode',
        'mime_type' => 'getMimeType',
        'video_url' => 'getVideoUrl',
        'preview_image' => 'getPreviewImage',
        'upload_operations' => 'getUploadOperations',
        'asset_delivery_state' => 'getAssetDeliveryState'
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
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['source_file_checksum'] = isset($data['source_file_checksum']) ? $data['source_file_checksum'] : null;
        $this->container['preview_frame_time_code'] = isset($data['preview_frame_time_code']) ? $data['preview_frame_time_code'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['video_url'] = isset($data['video_url']) ? $data['video_url'] : null;
        $this->container['preview_image'] = isset($data['preview_image']) ? $data['preview_image'] : null;
        $this->container['upload_operations'] = isset($data['upload_operations']) ? $data['upload_operations'] : null;
        $this->container['asset_delivery_state'] = isset($data['asset_delivery_state']) ? $data['asset_delivery_state'] : null;
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
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int|null $file_size file_size
     *
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets source_file_checksum
     *
     * @return string|null
     */
    public function getSourceFileChecksum()
    {
        return $this->container['source_file_checksum'];
    }

    /**
     * Sets source_file_checksum
     *
     * @param string|null $source_file_checksum source_file_checksum
     *
     * @return $this
     */
    public function setSourceFileChecksum($source_file_checksum)
    {
        $this->container['source_file_checksum'] = $source_file_checksum;

        return $this;
    }

    /**
     * Gets preview_frame_time_code
     *
     * @return string|null
     */
    public function getPreviewFrameTimeCode()
    {
        return $this->container['preview_frame_time_code'];
    }

    /**
     * Sets preview_frame_time_code
     *
     * @param string|null $preview_frame_time_code preview_frame_time_code
     *
     * @return $this
     */
    public function setPreviewFrameTimeCode($preview_frame_time_code)
    {
        $this->container['preview_frame_time_code'] = $preview_frame_time_code;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type mime_type
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets video_url
     *
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     *
     * @param string|null $video_url video_url
     *
     * @return $this
     */
    public function setVideoUrl($video_url)
    {
        $this->container['video_url'] = $video_url;

        return $this;
    }

    /**
     * Gets preview_image
     *
     * @return \OpenAPI\Client\Model\ImageAsset|null
     */
    public function getPreviewImage()
    {
        return $this->container['preview_image'];
    }

    /**
     * Sets preview_image
     *
     * @param \OpenAPI\Client\Model\ImageAsset|null $preview_image preview_image
     *
     * @return $this
     */
    public function setPreviewImage($preview_image)
    {
        $this->container['preview_image'] = $preview_image;

        return $this;
    }

    /**
     * Gets upload_operations
     *
     * @return \OpenAPI\Client\Model\UploadOperation[]|null
     */
    public function getUploadOperations()
    {
        return $this->container['upload_operations'];
    }

    /**
     * Sets upload_operations
     *
     * @param \OpenAPI\Client\Model\UploadOperation[]|null $upload_operations upload_operations
     *
     * @return $this
     */
    public function setUploadOperations($upload_operations)
    {
        $this->container['upload_operations'] = $upload_operations;

        return $this;
    }

    /**
     * Gets asset_delivery_state
     *
     * @return \OpenAPI\Client\Model\AppMediaAssetState|null
     */
    public function getAssetDeliveryState()
    {
        return $this->container['asset_delivery_state'];
    }

    /**
     * Sets asset_delivery_state
     *
     * @param \OpenAPI\Client\Model\AppMediaAssetState|null $asset_delivery_state asset_delivery_state
     *
     * @return $this
     */
    public function setAssetDeliveryState($asset_delivery_state)
    {
        $this->container['asset_delivery_state'] = $asset_delivery_state;

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


