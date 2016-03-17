<?php
/**
 * BaseResponse
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * BaseResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BaseResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'success' => 'bool',
        'current_server_time' => '\DateTime',
        'total_count' => 'int',
        'returned' => 'int',
        'pages' => 'int',
        'message' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'success' => 'success',
        'current_server_time' => 'current_server_time',
        'total_count' => 'totalCount',
        'returned' => 'returned',
        'pages' => 'pages',
        'message' => 'message'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'success' => 'setSuccess',
        'current_server_time' => 'setCurrentServerTime',
        'total_count' => 'setTotalCount',
        'returned' => 'setReturned',
        'pages' => 'setPages',
        'message' => 'setMessage'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'success' => 'getSuccess',
        'current_server_time' => 'getCurrentServerTime',
        'total_count' => 'getTotalCount',
        'returned' => 'getReturned',
        'pages' => 'getPages',
        'message' => 'getMessage'
    );
  
    
    /**
      * $success Indicates success of the operation.
      * @var bool
      */
    protected $success;
    
    /**
      * $current_server_time 
      * @var \DateTime
      */
    protected $current_server_time;
    
    /**
      * $total_count Total records available.
      * @var int
      */
    protected $total_count;
    
    /**
      * $returned Total records retrieved.
      * @var int
      */
    protected $returned;
    
    /**
      * $pages Total pages available.
      * @var int
      */
    protected $pages;
    
    /**
      * $message 
      * @var string
      */
    protected $message;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->success = $data["success"];
            $this->current_server_time = $data["current_server_time"];
            $this->total_count = $data["total_count"];
            $this->returned = $data["returned"];
            $this->pages = $data["pages"];
            $this->message = $data["message"];
        }
    }
    
    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
  
    /**
     * Sets success
     * @param bool $success Indicates success of the operation.
     * @return $this
     */
    public function setSuccess($success)
    {
        
        $this->success = $success;
        return $this;
    }
    
    /**
     * Gets current_server_time
     * @return \DateTime
     */
    public function getCurrentServerTime()
    {
        return $this->current_server_time;
    }
  
    /**
     * Sets current_server_time
     * @param \DateTime $current_server_time 
     * @return $this
     */
    public function setCurrentServerTime($current_server_time)
    {
        
        $this->current_server_time = $current_server_time;
        return $this;
    }
    
    /**
     * Gets total_count
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }
  
    /**
     * Sets total_count
     * @param int $total_count Total records available.
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        
        $this->total_count = $total_count;
        return $this;
    }
    
    /**
     * Gets returned
     * @return int
     */
    public function getReturned()
    {
        return $this->returned;
    }
  
    /**
     * Sets returned
     * @param int $returned Total records retrieved.
     * @return $this
     */
    public function setReturned($returned)
    {
        
        $this->returned = $returned;
        return $this;
    }
    
    /**
     * Gets pages
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }
  
    /**
     * Sets pages
     * @param int $pages Total pages available.
     * @return $this
     */
    public function setPages($pages)
    {
        
        $this->pages = $pages;
        return $this;
    }
    
    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
  
    /**
     * Sets message
     * @param string $message 
     * @return $this
     */
    public function setMessage($message)
    {
        
        $this->message = $message;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
