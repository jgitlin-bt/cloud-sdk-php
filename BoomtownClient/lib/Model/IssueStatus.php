<?php
/**
 * IssueStatus
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
 * IssueStatus Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IssueStatus implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'created' => '\DateTime',
        'type' => 'string',
        'status' => 'string',
        'resolution' => 'string',
        'scheduled_time' => 'string',
        'ticket_summary_text' => 'string',
        'history_summary_text' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'created' => 'created',
        'type' => 'type',
        'status' => 'status',
        'resolution' => 'resolution',
        'scheduled_time' => 'scheduled_time',
        'ticket_summary_text' => 'ticketSummaryText',
        'history_summary_text' => 'historySummaryText'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'created' => 'setCreated',
        'type' => 'setType',
        'status' => 'setStatus',
        'resolution' => 'setResolution',
        'scheduled_time' => 'setScheduledTime',
        'ticket_summary_text' => 'setTicketSummaryText',
        'history_summary_text' => 'setHistorySummaryText'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'created' => 'getCreated',
        'type' => 'getType',
        'status' => 'getStatus',
        'resolution' => 'getResolution',
        'scheduled_time' => 'getScheduledTime',
        'ticket_summary_text' => 'getTicketSummaryText',
        'history_summary_text' => 'getHistorySummaryText'
    );
  
    
    /**
      * $created Date created.
      * @var \DateTime
      */
    protected $created;
    
    /**
      * $type The type of Issue this log is associated to.
      * @var string
      */
    protected $type;
    
    /**
      * $status The status of the issue.
      * @var string
      */
    protected $status;
    
    /**
      * $resolution Resolution type.
      * @var string
      */
    protected $resolution;
    
    /**
      * $scheduled_time Scheduled date/time.
      * @var string
      */
    protected $scheduled_time;
    
    /**
      * $ticket_summary_text Text describing the issue status/log event.
      * @var string
      */
    protected $ticket_summary_text;
    
    /**
      * $history_summary_text Text describing the issue status/log event.
      * @var string
      */
    protected $history_summary_text;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->created = $data["created"];
            $this->type = $data["type"];
            $this->status = $data["status"];
            $this->resolution = $data["resolution"];
            $this->scheduled_time = $data["scheduled_time"];
            $this->ticket_summary_text = $data["ticket_summary_text"];
            $this->history_summary_text = $data["history_summary_text"];
        }
    }
    
    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
  
    /**
     * Sets created
     * @param \DateTime $created Date created.
     * @return $this
     */
    public function setCreated($created)
    {
        
        $this->created = $created;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of Issue this log is associated to.
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status The status of the issue.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets resolution
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }
  
    /**
     * Sets resolution
     * @param string $resolution Resolution type.
     * @return $this
     */
    public function setResolution($resolution)
    {
        
        $this->resolution = $resolution;
        return $this;
    }
    
    /**
     * Gets scheduled_time
     * @return string
     */
    public function getScheduledTime()
    {
        return $this->scheduled_time;
    }
  
    /**
     * Sets scheduled_time
     * @param string $scheduled_time Scheduled date/time.
     * @return $this
     */
    public function setScheduledTime($scheduled_time)
    {
        
        $this->scheduled_time = $scheduled_time;
        return $this;
    }
    
    /**
     * Gets ticket_summary_text
     * @return string
     */
    public function getTicketSummaryText()
    {
        return $this->ticket_summary_text;
    }
  
    /**
     * Sets ticket_summary_text
     * @param string $ticket_summary_text Text describing the issue status/log event.
     * @return $this
     */
    public function setTicketSummaryText($ticket_summary_text)
    {
        
        $this->ticket_summary_text = $ticket_summary_text;
        return $this;
    }
    
    /**
     * Gets history_summary_text
     * @return string
     */
    public function getHistorySummaryText()
    {
        return $this->history_summary_text;
    }
  
    /**
     * Sets history_summary_text
     * @param string $history_summary_text Text describing the issue status/log event.
     * @return $this
     */
    public function setHistorySummaryText($history_summary_text)
    {
        
        $this->history_summary_text = $history_summary_text;
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
