<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 14:01
 */
namespace Hisune\EchartsPHP;

class ECharts implements \ArrayAccess
{

    /**
     * @param $dist string, dist of libraries
     */
    public function __construct($dist = '')
    {
        if($dist)
            Config::$dist = $dist;
    }

    public function __set($offset, $value)
    {
        return $this->offsetSet($offset, $value);
    }

    public function __get($offset)
    {
        return $this->offsetGet($offset);
    }

    public function offsetExists ($offset)
    {
        return property_exists($this, $offset);
    }

    public function offsetGet ($offset)
    {
        if(!$this->offsetExists($offset))
            $this->$offset = new self;

        return $this->$offset;
    }

    public function offsetSet ($offset, $value)
    {
        return $this->$offset = $value;
    }

    public function offsetUnset ($offset)
    {
        unset($this->$offset);
    }

    public function render($id, $attribute = array(), $theme = null)
    {
        return Config::render($id, get_object_vars($this), $theme, $attribute);
    }

}



