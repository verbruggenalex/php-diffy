<?php
/**
 * FullProject
 *
 * PHP version 5
 *
 * @category Class
 * @package  VerbruggenAlex\PhpDiffy
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Diffy
 *
 * API for visual regression testing tool Diffy
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VerbruggenAlex\PhpDiffy\Model;

use \ArrayAccess;
use \VerbruggenAlex\PhpDiffy\ObjectSerializer;

/**
 * FullProject Class Doc Comment
 *
 * @category Class
 * @package  VerbruggenAlex\PhpDiffy
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FullProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FullProject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'urls' => 'string[]',
'production' => 'string',
'staging' => 'string',
'development' => 'string',
'breakpoints' => 'BigDecimal[]',
'schedule' => 'array',
'authenticate' => '\VerbruggenAlex\PhpDiffy\Model\FullProjectAuthenticate',
'advanced' => '\VerbruggenAlex\PhpDiffy\Model\FullProjectAdvanced',
'modify' => '\VerbruggenAlex\PhpDiffy\Model\FullProjectModify',
'github_url' => 'string',
'team' => '\VerbruggenAlex\PhpDiffy\Model\FullProjectTeam[]',
'notify' => '\VerbruggenAlex\PhpDiffy\Model\FullProjectNotify'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'urls' => null,
'production' => 'url',
'staging' => 'url',
'development' => 'url',
'breakpoints' => null,
'schedule' => null,
'authenticate' => null,
'advanced' => null,
'modify' => null,
'github_url' => 'url',
'team' => null,
'notify' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
'urls' => 'urls',
'production' => 'production',
'staging' => 'staging',
'development' => 'development',
'breakpoints' => 'breakpoints',
'schedule' => 'schedule',
'authenticate' => 'authenticate',
'advanced' => 'advanced',
'modify' => 'modify',
'github_url' => 'githubUrl',
'team' => 'team',
'notify' => 'notify'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'urls' => 'setUrls',
'production' => 'setProduction',
'staging' => 'setStaging',
'development' => 'setDevelopment',
'breakpoints' => 'setBreakpoints',
'schedule' => 'setSchedule',
'authenticate' => 'setAuthenticate',
'advanced' => 'setAdvanced',
'modify' => 'setModify',
'github_url' => 'setGithubUrl',
'team' => 'setTeam',
'notify' => 'setNotify'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'urls' => 'getUrls',
'production' => 'getProduction',
'staging' => 'getStaging',
'development' => 'getDevelopment',
'breakpoints' => 'getBreakpoints',
'schedule' => 'getSchedule',
'authenticate' => 'getAuthenticate',
'advanced' => 'getAdvanced',
'modify' => 'getModify',
'github_url' => 'getGithubUrl',
'team' => 'getTeam',
'notify' => 'getNotify'    ];

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
        return self::$swaggerModelName;
    }

    const BREAKPOINTS__320 = '320';
const BREAKPOINTS__640 = '640';
const BREAKPOINTS__720 = '720';
const BREAKPOINTS__768 = '768';
const BREAKPOINTS__960 = '960';
const BREAKPOINTS__1024 = '1024';
const BREAKPOINTS__1080 = '1080';
const BREAKPOINTS__1200 = '1200';
const BREAKPOINTS__1440 = '1440';
const BREAKPOINTS__1920 = '1920';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakpointsAllowableValues()
    {
        return [
            self::BREAKPOINTS__320,
self::BREAKPOINTS__640,
self::BREAKPOINTS__720,
self::BREAKPOINTS__768,
self::BREAKPOINTS__960,
self::BREAKPOINTS__1024,
self::BREAKPOINTS__1080,
self::BREAKPOINTS__1200,
self::BREAKPOINTS__1440,
self::BREAKPOINTS__1920,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['production'] = isset($data['production']) ? $data['production'] : null;
        $this->container['staging'] = isset($data['staging']) ? $data['staging'] : null;
        $this->container['development'] = isset($data['development']) ? $data['development'] : null;
        $this->container['breakpoints'] = isset($data['breakpoints']) ? $data['breakpoints'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['authenticate'] = isset($data['authenticate']) ? $data['authenticate'] : null;
        $this->container['advanced'] = isset($data['advanced']) ? $data['advanced'] : null;
        $this->container['modify'] = isset($data['modify']) ? $data['modify'] : null;
        $this->container['github_url'] = isset($data['github_url']) ? $data['github_url'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['notify'] = isset($data['notify']) ? $data['notify'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets production
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->container['production'];
    }

    /**
     * Sets production
     *
     * @param string $production production
     *
     * @return $this
     */
    public function setProduction($production)
    {
        $this->container['production'] = $production;

        return $this;
    }

    /**
     * Gets staging
     *
     * @return string
     */
    public function getStaging()
    {
        return $this->container['staging'];
    }

    /**
     * Sets staging
     *
     * @param string $staging staging
     *
     * @return $this
     */
    public function setStaging($staging)
    {
        $this->container['staging'] = $staging;

        return $this;
    }

    /**
     * Gets development
     *
     * @return string
     */
    public function getDevelopment()
    {
        return $this->container['development'];
    }

    /**
     * Sets development
     *
     * @param string $development development
     *
     * @return $this
     */
    public function setDevelopment($development)
    {
        $this->container['development'] = $development;

        return $this;
    }

    /**
     * Gets breakpoints
     *
     * @return BigDecimal[]
     */
    public function getBreakpoints()
    {
        return $this->container['breakpoints'];
    }

    /**
     * Sets breakpoints
     *
     * @param BigDecimal[] $breakpoints breakpoints
     *
     * @return $this
     */
    public function setBreakpoints($breakpoints)
    {
        $allowedValues = $this->getBreakpointsAllowableValues();
        if (!is_null($breakpoints) && array_diff($breakpoints, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'breakpoints', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['breakpoints'] = $breakpoints;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return array
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param array $schedule Example: [ mon:true, tue:false ... ]
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets authenticate
     *
     * @return \VerbruggenAlex\PhpDiffy\Model\FullProjectAuthenticate
     */
    public function getAuthenticate()
    {
        return $this->container['authenticate'];
    }

    /**
     * Sets authenticate
     *
     * @param \VerbruggenAlex\PhpDiffy\Model\FullProjectAuthenticate $authenticate authenticate
     *
     * @return $this
     */
    public function setAuthenticate($authenticate)
    {
        $this->container['authenticate'] = $authenticate;

        return $this;
    }

    /**
     * Gets advanced
     *
     * @return \VerbruggenAlex\PhpDiffy\Model\FullProjectAdvanced
     */
    public function getAdvanced()
    {
        return $this->container['advanced'];
    }

    /**
     * Sets advanced
     *
     * @param \VerbruggenAlex\PhpDiffy\Model\FullProjectAdvanced $advanced advanced
     *
     * @return $this
     */
    public function setAdvanced($advanced)
    {
        $this->container['advanced'] = $advanced;

        return $this;
    }

    /**
     * Gets modify
     *
     * @return \VerbruggenAlex\PhpDiffy\Model\FullProjectModify
     */
    public function getModify()
    {
        return $this->container['modify'];
    }

    /**
     * Sets modify
     *
     * @param \VerbruggenAlex\PhpDiffy\Model\FullProjectModify $modify modify
     *
     * @return $this
     */
    public function setModify($modify)
    {
        $this->container['modify'] = $modify;

        return $this;
    }

    /**
     * Gets github_url
     *
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->container['github_url'];
    }

    /**
     * Sets github_url
     *
     * @param string $github_url github_url
     *
     * @return $this
     */
    public function setGithubUrl($github_url)
    {
        $this->container['github_url'] = $github_url;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \VerbruggenAlex\PhpDiffy\Model\FullProjectTeam[]
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \VerbruggenAlex\PhpDiffy\Model\FullProjectTeam[] $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return \VerbruggenAlex\PhpDiffy\Model\FullProjectNotify
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param \VerbruggenAlex\PhpDiffy\Model\FullProjectNotify $notify notify
     *
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}