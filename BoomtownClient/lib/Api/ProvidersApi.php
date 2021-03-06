<?php
/**
 * ProvidersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ProvidersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProvidersApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.goboomtown.com/api/v2');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return ProvidersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getProvider
     *
     * Returns your Provider
     *
     * @return \Swagger\Client\Model\ProviderResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProvider()
    {
        list($response, $statusCode, $httpHeader) = $this->getProviderWithHttpInfo ();
        return $response; 
    }

    /**
     * getProviderWithHttpInfo
     *
     * Returns your Provider
     *
     * @return Array of \Swagger\Client\Model\ProviderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderWithHttpInfo()
    {


        // parse inputs
        $resourcePath = "/providers/get";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));




        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);




        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Date');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Date'] = $apiKey;
        }


        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Signature');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Signature'] = $apiKey;
        }


        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Token'] = $apiKey;
        }


        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\ProviderResponse'
            );

            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ProviderResponse', $httpHeader), $statusCode, $httpHeader);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProviderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * getProviders
     *
     * Returns collection of Providers
     *
     * @return \Swagger\Client\Model\ProviderResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviders($limit = null, $start = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getProvidersWithHttpInfo ($limit, $start);
        return $response;
    }


    /**
     * getProviderWithHttpInfo
     *
     * Returns your Provider
     *
     * @return Array of \Swagger\Client\Model\ProviderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProvidersWithHttpInfo($limit = null, $start = null)
    {
        
  
        // parse inputs
        $resourcePath = "/providers/list";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));

        // query params
        $limit = (is_int($limit) ? $limit : 10);
        $start = (is_int($start) ? $start : 0);

        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params

        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }// query params
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Date');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Date'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Signature');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Signature'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\ProviderResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ProviderResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProviderResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getProviderMembers
     *
     * Returns Merchants
     *
     * @return \Swagger\Client\Model\MemberResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderMembers()
    {
        list($response, $statusCode, $httpHeader) = $this->getProviderMembersWithHttpInfo ();
        return $response; 
    }


    /**
     * getProviderMembersWithHttpInfo
     *
     * Returns Merchants
     *
     * @return Array of \Swagger\Client\Model\MemberResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderMembersWithHttpInfo()
    {
        
  
        // parse inputs
        $resourcePath = "/providers/members";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Date');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Date'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Signature');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Signature'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\MemberResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\MemberResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\MemberResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getProviderTeam
     *
     * Returns a ProviderTeam
     *
     * @param string $provider_team_id The primary key of the ProviderTeam (required)
     * @return \Swagger\Client\Model\ProviderTeamResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderTeam($provider_team_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getProviderTeamWithHttpInfo ($provider_team_id);
        return $response; 
    }


    /**
     * getProviderTeamWithHttpInfo
     *
     * Returns a ProviderTeam
     *
     * @param string $provider_team_id The primary key of the ProviderTeam (required)
     * @return Array of \Swagger\Client\Model\ProviderTeamResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderTeamWithHttpInfo($provider_team_id)
    {
        
        // verify the required parameter 'provider_team_id' is set
        if ($provider_team_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $provider_team_id when calling getProviderTeam');
        }
  
        // parse inputs
        $resourcePath = "/providers/teams/{provider_team_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($provider_team_id !== null) {
            $resourcePath = str_replace(
                "{" . "provider_team_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($provider_team_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Date');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Date'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Signature');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Signature'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\ProviderTeamResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ProviderTeamResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProviderTeamResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getProviderTeams
     *
     * Returns your ProviderTeams
     *
     * @return \Swagger\Client\Model\ProviderTeamResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderTeams()
    {
        list($response, $statusCode, $httpHeader) = $this->getProviderTeamsWithHttpInfo ();
        return $response; 
    }


    /**
     * getProviderTeamsWithHttpInfo
     *
     * Returns your ProviderTeams
     *
     * @return Array of \Swagger\Client\Model\ProviderTeamResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getProviderTeamsWithHttpInfo()
    {
        
  
        // parse inputs
        $resourcePath = "/providers/teams";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Date');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Date'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Signature');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Signature'] = $apiKey;
        }
        
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Boomtown-Token');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Boomtown-Token'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\ProviderTeamResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\ProviderTeamResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\ProviderTeamResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            default:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
