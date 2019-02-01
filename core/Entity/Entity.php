<?php
/**
 * Created by PhpStorm.
 * User: raharoson
 * Date: 12/6/18
 * Time: 8:10 AM
 */

namespace Core\Entity;

class Entity
{
    protected $id;

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getId()
    {
        return $this->id;
    }
}