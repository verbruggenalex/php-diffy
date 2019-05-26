<?php
/**
 * FullProjectAdvanced
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
 * FullProjectAdvanced Class Doc Comment
 *
 * @category Class
 * @package  VerbruggenAlex\PhpDiffy
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FullProjectAdvanced implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FullProject_advanced';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ps_screenshot_bot' => 'bool',
'ps_screenshot_bot_string' => 'string',
'ps_screenshot_cookies' => 'bool',
'ps_screenshot_cookies_string' => 'string',
'ps_screenshot_delay' => 'bool',
'ps_screenshot_delay_sec' => 'BigDecimal',
'ps_screenshot_no_amin' => 'bool',
'ps_screenshot_proxy' => 'bool',
'ps_screenshot_proxy_host' => 'string',
'ps_screenshot_proxy_login' => 'string',
'ps_screenshot_proxy_password' => 'string',
'ps_screenshot_proxy_port' => 'BigDecimal',
'ps_screenshot_scroll' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ps_screenshot_bot' => null,
'ps_screenshot_bot_string' => null,
'ps_screenshot_cookies' => null,
'ps_screenshot_cookies_string' => null,
'ps_screenshot_delay' => null,
'ps_screenshot_delay_sec' => null,
'ps_screenshot_no_amin' => null,
'ps_screenshot_proxy' => null,
'ps_screenshot_proxy_host' => 'url',
'ps_screenshot_proxy_login' => null,
'ps_screenshot_proxy_password' => null,
'ps_screenshot_proxy_port' => null,
'ps_screenshot_scroll' => null    ];

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
        'ps_screenshot_bot' => 'psScreenshotBot',
'ps_screenshot_bot_string' => 'psScreenshotBotString',
'ps_screenshot_cookies' => 'psScreenshotCookies',
'ps_screenshot_cookies_string' => 'psScreenshotCookiesString',
'ps_screenshot_delay' => 'psScreenshotDelay',
'ps_screenshot_delay_sec' => 'psScreenshotDelaySec',
'ps_screenshot_no_amin' => 'psScreenshotNoAmin',
'ps_screenshot_proxy' => 'psScreenshotProxy',
'ps_screenshot_proxy_host' => 'psScreenshotProxyHost',
'ps_screenshot_proxy_login' => 'psScreenshotProxyLogin',
'ps_screenshot_proxy_password' => 'psScreenshotProxyPassword',
'ps_screenshot_proxy_port' => 'psScreenshotProxyPort',
'ps_screenshot_scroll' => 'psScreenshotScroll'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ps_screenshot_bot' => 'setPsScreenshotBot',
'ps_screenshot_bot_string' => 'setPsScreenshotBotString',
'ps_screenshot_cookies' => 'setPsScreenshotCookies',
'ps_screenshot_cookies_string' => 'setPsScreenshotCookiesString',
'ps_screenshot_delay' => 'setPsScreenshotDelay',
'ps_screenshot_delay_sec' => 'setPsScreenshotDelaySec',
'ps_screenshot_no_amin' => 'setPsScreenshotNoAmin',
'ps_screenshot_proxy' => 'setPsScreenshotProxy',
'ps_screenshot_proxy_host' => 'setPsScreenshotProxyHost',
'ps_screenshot_proxy_login' => 'setPsScreenshotProxyLogin',
'ps_screenshot_proxy_password' => 'setPsScreenshotProxyPassword',
'ps_screenshot_proxy_port' => 'setPsScreenshotProxyPort',
'ps_screenshot_scroll' => 'setPsScreenshotScroll'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ps_screenshot_bot' => 'getPsScreenshotBot',
'ps_screenshot_bot_string' => 'getPsScreenshotBotString',
'ps_screenshot_cookies' => 'getPsScreenshotCookies',
'ps_screenshot_cookies_string' => 'getPsScreenshotCookiesString',
'ps_screenshot_delay' => 'getPsScreenshotDelay',
'ps_screenshot_delay_sec' => 'getPsScreenshotDelaySec',
'ps_screenshot_no_amin' => 'getPsScreenshotNoAmin',
'ps_screenshot_proxy' => 'getPsScreenshotProxy',
'ps_screenshot_proxy_host' => 'getPsScreenshotProxyHost',
'ps_screenshot_proxy_login' => 'getPsScreenshotProxyLogin',
'ps_screenshot_proxy_password' => 'getPsScreenshotProxyPassword',
'ps_screenshot_proxy_port' => 'getPsScreenshotProxyPort',
'ps_screenshot_scroll' => 'getPsScreenshotScroll'    ];

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
        $this->container['ps_screenshot_bot'] = isset($data['ps_screenshot_bot']) ? $data['ps_screenshot_bot'] : null;
        $this->container['ps_screenshot_bot_string'] = isset($data['ps_screenshot_bot_string']) ? $data['ps_screenshot_bot_string'] : null;
        $this->container['ps_screenshot_cookies'] = isset($data['ps_screenshot_cookies']) ? $data['ps_screenshot_cookies'] : null;
        $this->container['ps_screenshot_cookies_string'] = isset($data['ps_screenshot_cookies_string']) ? $data['ps_screenshot_cookies_string'] : null;
        $this->container['ps_screenshot_delay'] = isset($data['ps_screenshot_delay']) ? $data['ps_screenshot_delay'] : null;
        $this->container['ps_screenshot_delay_sec'] = isset($data['ps_screenshot_delay_sec']) ? $data['ps_screenshot_delay_sec'] : null;
        $this->container['ps_screenshot_no_amin'] = isset($data['ps_screenshot_no_amin']) ? $data['ps_screenshot_no_amin'] : null;
        $this->container['ps_screenshot_proxy'] = isset($data['ps_screenshot_proxy']) ? $data['ps_screenshot_proxy'] : null;
        $this->container['ps_screenshot_proxy_host'] = isset($data['ps_screenshot_proxy_host']) ? $data['ps_screenshot_proxy_host'] : null;
        $this->container['ps_screenshot_proxy_login'] = isset($data['ps_screenshot_proxy_login']) ? $data['ps_screenshot_proxy_login'] : null;
        $this->container['ps_screenshot_proxy_password'] = isset($data['ps_screenshot_proxy_password']) ? $data['ps_screenshot_proxy_password'] : null;
        $this->container['ps_screenshot_proxy_port'] = isset($data['ps_screenshot_proxy_port']) ? $data['ps_screenshot_proxy_port'] : null;
        $this->container['ps_screenshot_scroll'] = isset($data['ps_screenshot_scroll']) ? $data['ps_screenshot_scroll'] : null;
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
     * Gets ps_screenshot_bot
     *
     * @return bool
     */
    public function getPsScreenshotBot()
    {
        return $this->container['ps_screenshot_bot'];
    }

    /**
     * Sets ps_screenshot_bot
     *
     * @param bool $ps_screenshot_bot ps_screenshot_bot
     *
     * @return $this
     */
    public function setPsScreenshotBot($ps_screenshot_bot)
    {
        $this->container['ps_screenshot_bot'] = $ps_screenshot_bot;

        return $this;
    }

    /**
     * Gets ps_screenshot_bot_string
     *
     * @return string
     */
    public function getPsScreenshotBotString()
    {
        return $this->container['ps_screenshot_bot_string'];
    }

    /**
     * Sets ps_screenshot_bot_string
     *
     * @param string $ps_screenshot_bot_string ps_screenshot_bot_string
     *
     * @return $this
     */
    public function setPsScreenshotBotString($ps_screenshot_bot_string)
    {
        $this->container['ps_screenshot_bot_string'] = $ps_screenshot_bot_string;

        return $this;
    }

    /**
     * Gets ps_screenshot_cookies
     *
     * @return bool
     */
    public function getPsScreenshotCookies()
    {
        return $this->container['ps_screenshot_cookies'];
    }

    /**
     * Sets ps_screenshot_cookies
     *
     * @param bool $ps_screenshot_cookies ps_screenshot_cookies
     *
     * @return $this
     */
    public function setPsScreenshotCookies($ps_screenshot_cookies)
    {
        $this->container['ps_screenshot_cookies'] = $ps_screenshot_cookies;

        return $this;
    }

    /**
     * Gets ps_screenshot_cookies_string
     *
     * @return string
     */
    public function getPsScreenshotCookiesString()
    {
        return $this->container['ps_screenshot_cookies_string'];
    }

    /**
     * Sets ps_screenshot_cookies_string
     *
     * @param string $ps_screenshot_cookies_string ps_screenshot_cookies_string
     *
     * @return $this
     */
    public function setPsScreenshotCookiesString($ps_screenshot_cookies_string)
    {
        $this->container['ps_screenshot_cookies_string'] = $ps_screenshot_cookies_string;

        return $this;
    }

    /**
     * Gets ps_screenshot_delay
     *
     * @return bool
     */
    public function getPsScreenshotDelay()
    {
        return $this->container['ps_screenshot_delay'];
    }

    /**
     * Sets ps_screenshot_delay
     *
     * @param bool $ps_screenshot_delay ps_screenshot_delay
     *
     * @return $this
     */
    public function setPsScreenshotDelay($ps_screenshot_delay)
    {
        $this->container['ps_screenshot_delay'] = $ps_screenshot_delay;

        return $this;
    }

    /**
     * Gets ps_screenshot_delay_sec
     *
     * @return BigDecimal
     */
    public function getPsScreenshotDelaySec()
    {
        return $this->container['ps_screenshot_delay_sec'];
    }

    /**
     * Sets ps_screenshot_delay_sec
     *
     * @param BigDecimal $ps_screenshot_delay_sec ps_screenshot_delay_sec
     *
     * @return $this
     */
    public function setPsScreenshotDelaySec($ps_screenshot_delay_sec)
    {
        $this->container['ps_screenshot_delay_sec'] = $ps_screenshot_delay_sec;

        return $this;
    }

    /**
     * Gets ps_screenshot_no_amin
     *
     * @return bool
     */
    public function getPsScreenshotNoAmin()
    {
        return $this->container['ps_screenshot_no_amin'];
    }

    /**
     * Sets ps_screenshot_no_amin
     *
     * @param bool $ps_screenshot_no_amin ps_screenshot_no_amin
     *
     * @return $this
     */
    public function setPsScreenshotNoAmin($ps_screenshot_no_amin)
    {
        $this->container['ps_screenshot_no_amin'] = $ps_screenshot_no_amin;

        return $this;
    }

    /**
     * Gets ps_screenshot_proxy
     *
     * @return bool
     */
    public function getPsScreenshotProxy()
    {
        return $this->container['ps_screenshot_proxy'];
    }

    /**
     * Sets ps_screenshot_proxy
     *
     * @param bool $ps_screenshot_proxy ps_screenshot_proxy
     *
     * @return $this
     */
    public function setPsScreenshotProxy($ps_screenshot_proxy)
    {
        $this->container['ps_screenshot_proxy'] = $ps_screenshot_proxy;

        return $this;
    }

    /**
     * Gets ps_screenshot_proxy_host
     *
     * @return string
     */
    public function getPsScreenshotProxyHost()
    {
        return $this->container['ps_screenshot_proxy_host'];
    }

    /**
     * Sets ps_screenshot_proxy_host
     *
     * @param string $ps_screenshot_proxy_host ps_screenshot_proxy_host
     *
     * @return $this
     */
    public function setPsScreenshotProxyHost($ps_screenshot_proxy_host)
    {
        $this->container['ps_screenshot_proxy_host'] = $ps_screenshot_proxy_host;

        return $this;
    }

    /**
     * Gets ps_screenshot_proxy_login
     *
     * @return string
     */
    public function getPsScreenshotProxyLogin()
    {
        return $this->container['ps_screenshot_proxy_login'];
    }

    /**
     * Sets ps_screenshot_proxy_login
     *
     * @param string $ps_screenshot_proxy_login ps_screenshot_proxy_login
     *
     * @return $this
     */
    public function setPsScreenshotProxyLogin($ps_screenshot_proxy_login)
    {
        $this->container['ps_screenshot_proxy_login'] = $ps_screenshot_proxy_login;

        return $this;
    }

    /**
     * Gets ps_screenshot_proxy_password
     *
     * @return string
     */
    public function getPsScreenshotProxyPassword()
    {
        return $this->container['ps_screenshot_proxy_password'];
    }

    /**
     * Sets ps_screenshot_proxy_password
     *
     * @param string $ps_screenshot_proxy_password ps_screenshot_proxy_password
     *
     * @return $this
     */
    public function setPsScreenshotProxyPassword($ps_screenshot_proxy_password)
    {
        $this->container['ps_screenshot_proxy_password'] = $ps_screenshot_proxy_password;

        return $this;
    }

    /**
     * Gets ps_screenshot_proxy_port
     *
     * @return BigDecimal
     */
    public function getPsScreenshotProxyPort()
    {
        return $this->container['ps_screenshot_proxy_port'];
    }

    /**
     * Sets ps_screenshot_proxy_port
     *
     * @param BigDecimal $ps_screenshot_proxy_port ps_screenshot_proxy_port
     *
     * @return $this
     */
    public function setPsScreenshotProxyPort($ps_screenshot_proxy_port)
    {
        $this->container['ps_screenshot_proxy_port'] = $ps_screenshot_proxy_port;

        return $this;
    }

    /**
     * Gets ps_screenshot_scroll
     *
     * @return bool
     */
    public function getPsScreenshotScroll()
    {
        return $this->container['ps_screenshot_scroll'];
    }

    /**
     * Sets ps_screenshot_scroll
     *
     * @param bool $ps_screenshot_scroll ps_screenshot_scroll
     *
     * @return $this
     */
    public function setPsScreenshotScroll($ps_screenshot_scroll)
    {
        $this->container['ps_screenshot_scroll'] = $ps_screenshot_scroll;

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