<?php
/**
 * Created by Hisune.
 * User: Hisune <hi@hisune.com>
 * Date: 2017/3/29
 * Time: 17:39
 */

namespace Hisune\EchartsPHP;


class Property implements \ArrayAccess
{

    public $_options = [];

    public function __set($offset, $value)
    {
        return $this->offsetSet($offset, $value);
    }

    public function __get($offset)
    {
        return $this->offsetGet($offset);
    }

    public function offsetExists($offset)
    {
        return isset($this->_options[$offset]);
    }

    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset))
            $this->_options[$offset] = new self;

        return $this->_options[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset))
            return $this->_options[] = $value;
        else
            return $this->_options[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->_options[$offset]);
    }

}