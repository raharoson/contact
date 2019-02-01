<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/5/18
 * Time: 9:24 PM
 */

namespace Core;

/**
 * Class Config
 * @package Core
 */
class Config
{
    private $settings = [];

    private static $_instance;

    public static function getInstance($file_config)
    {
        if(is_null(self::$_instance))
        {
            self::$_instance = new Config($file_config);
        }
        return self::$_instance;
    }

    /**
     * Config constructor.
     * @param $file_config
     */
    public function __construct($file_config)
    {
        $this->settings = require($file_config);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function get($key)
    {
        if(!isset($this->settings[$key]))
        {
            return null;
        }
        return $this->settings[$key];
    }
}