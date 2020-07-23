<?php
/**
 * SalesReportsApi
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

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * SalesReportsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesReportsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation salesReportsGetCollection
     *
     * @param  string[] $filter_frequency filter by attribute &#39;frequency&#39; (required)
     * @param  string[] $filter_report_sub_type filter by attribute &#39;reportSubType&#39; (required)
     * @param  string[] $filter_report_type filter by attribute &#39;reportType&#39; (required)
     * @param  string[] $filter_vendor_number filter by attribute &#39;vendorNumber&#39; (required)
     * @param  string[] $filter_report_date filter by attribute &#39;reportDate&#39; (optional)
     * @param  string[] $filter_version filter by attribute &#39;version&#39; (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ErrorResponse|\OpenAPI\Client\Model\ErrorResponse|\SplFileObject
     */
    public function salesReportsGetCollection($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date = null, $filter_version = null)
    {
        list($response) = $this->salesReportsGetCollectionWithHttpInfo($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version);
        return $response;
    }

    /**
     * Operation salesReportsGetCollectionWithHttpInfo
     *
     * @param  string[] $filter_frequency filter by attribute &#39;frequency&#39; (required)
     * @param  string[] $filter_report_sub_type filter by attribute &#39;reportSubType&#39; (required)
     * @param  string[] $filter_report_type filter by attribute &#39;reportType&#39; (required)
     * @param  string[] $filter_vendor_number filter by attribute &#39;vendorNumber&#39; (required)
     * @param  string[] $filter_report_date filter by attribute &#39;reportDate&#39; (optional)
     * @param  string[] $filter_version filter by attribute &#39;version&#39; (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ErrorResponse|\OpenAPI\Client\Model\ErrorResponse|\SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesReportsGetCollectionWithHttpInfo($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date = null, $filter_version = null)
    {
        $request = $this->salesReportsGetCollectionRequest($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 400:
                    if ('\OpenAPI\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\OpenAPI\Client\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\SplFileObject' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SplFileObject';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation salesReportsGetCollectionAsync
     *
     * 
     *
     * @param  string[] $filter_frequency filter by attribute &#39;frequency&#39; (required)
     * @param  string[] $filter_report_sub_type filter by attribute &#39;reportSubType&#39; (required)
     * @param  string[] $filter_report_type filter by attribute &#39;reportType&#39; (required)
     * @param  string[] $filter_vendor_number filter by attribute &#39;vendorNumber&#39; (required)
     * @param  string[] $filter_report_date filter by attribute &#39;reportDate&#39; (optional)
     * @param  string[] $filter_version filter by attribute &#39;version&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesReportsGetCollectionAsync($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date = null, $filter_version = null)
    {
        return $this->salesReportsGetCollectionAsyncWithHttpInfo($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesReportsGetCollectionAsyncWithHttpInfo
     *
     * 
     *
     * @param  string[] $filter_frequency filter by attribute &#39;frequency&#39; (required)
     * @param  string[] $filter_report_sub_type filter by attribute &#39;reportSubType&#39; (required)
     * @param  string[] $filter_report_type filter by attribute &#39;reportType&#39; (required)
     * @param  string[] $filter_vendor_number filter by attribute &#39;vendorNumber&#39; (required)
     * @param  string[] $filter_report_date filter by attribute &#39;reportDate&#39; (optional)
     * @param  string[] $filter_version filter by attribute &#39;version&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesReportsGetCollectionAsyncWithHttpInfo($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date = null, $filter_version = null)
    {
        $returnType = '\SplFileObject';
        $request = $this->salesReportsGetCollectionRequest($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date, $filter_version);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesReportsGetCollection'
     *
     * @param  string[] $filter_frequency filter by attribute &#39;frequency&#39; (required)
     * @param  string[] $filter_report_sub_type filter by attribute &#39;reportSubType&#39; (required)
     * @param  string[] $filter_report_type filter by attribute &#39;reportType&#39; (required)
     * @param  string[] $filter_vendor_number filter by attribute &#39;vendorNumber&#39; (required)
     * @param  string[] $filter_report_date filter by attribute &#39;reportDate&#39; (optional)
     * @param  string[] $filter_version filter by attribute &#39;version&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function salesReportsGetCollectionRequest($filter_frequency, $filter_report_sub_type, $filter_report_type, $filter_vendor_number, $filter_report_date = null, $filter_version = null)
    {
        // verify the required parameter 'filter_frequency' is set
        if ($filter_frequency === null || (is_array($filter_frequency) && count($filter_frequency) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_frequency when calling salesReportsGetCollection'
            );
        }
        // verify the required parameter 'filter_report_sub_type' is set
        if ($filter_report_sub_type === null || (is_array($filter_report_sub_type) && count($filter_report_sub_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_report_sub_type when calling salesReportsGetCollection'
            );
        }
        // verify the required parameter 'filter_report_type' is set
        if ($filter_report_type === null || (is_array($filter_report_type) && count($filter_report_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_report_type when calling salesReportsGetCollection'
            );
        }
        // verify the required parameter 'filter_vendor_number' is set
        if ($filter_vendor_number === null || (is_array($filter_vendor_number) && count($filter_vendor_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_vendor_number when calling salesReportsGetCollection'
            );
        }

        $resourcePath = '/v1/salesReports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($filter_frequency)) {
            $filter_frequency = ObjectSerializer::serializeCollection($filter_frequency, 'csv', true);
        }
        if ($filter_frequency !== null) {
            $queryParams['filter[frequency]'] = ObjectSerializer::toQueryValue($filter_frequency);
        }
        // query params
        if (is_array($filter_report_date)) {
            $filter_report_date = ObjectSerializer::serializeCollection($filter_report_date, 'csv', true);
        }
        if ($filter_report_date !== null) {
            $queryParams['filter[reportDate]'] = ObjectSerializer::toQueryValue($filter_report_date);
        }
        // query params
        if (is_array($filter_report_sub_type)) {
            $filter_report_sub_type = ObjectSerializer::serializeCollection($filter_report_sub_type, 'csv', true);
        }
        if ($filter_report_sub_type !== null) {
            $queryParams['filter[reportSubType]'] = ObjectSerializer::toQueryValue($filter_report_sub_type);
        }
        // query params
        if (is_array($filter_report_type)) {
            $filter_report_type = ObjectSerializer::serializeCollection($filter_report_type, 'csv', true);
        }
        if ($filter_report_type !== null) {
            $queryParams['filter[reportType]'] = ObjectSerializer::toQueryValue($filter_report_type);
        }
        // query params
        if (is_array($filter_vendor_number)) {
            $filter_vendor_number = ObjectSerializer::serializeCollection($filter_vendor_number, 'csv', true);
        }
        if ($filter_vendor_number !== null) {
            $queryParams['filter[vendorNumber]'] = ObjectSerializer::toQueryValue($filter_vendor_number);
        }
        // query params
        if (is_array($filter_version)) {
            $filter_version = ObjectSerializer::serializeCollection($filter_version, 'csv', true);
        }
        if ($filter_version !== null) {
            $queryParams['filter[version]'] = ObjectSerializer::toQueryValue($filter_version);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'gzip']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'gzip'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
