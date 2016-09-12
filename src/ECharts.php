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

    public $_options = [];

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
        return isset($this->_options[$offset]);
    }

    public function offsetGet ($offset)
    {
        if(!$this->offsetExists($offset))
            $this->_options[$offset] = new self;

        return $this->_options[$offset];
    }

    public function offsetSet ($offset, $value)
    {
        if(is_null($offset))
            return $this->_options[] = $value;
        else
            return $this->_options[$offset] = $value;
    }

    public function offsetUnset ($offset)
    {
        unset($this->_options[$offset]);
    }

    public function render($id, $attribute = array(), $theme = null)
    {
        return Config::render($id, $this->getOption(), $theme, $attribute);
    }

    public function getOption($render = null)
    {
        $options = [];
        is_null($render) && $render = $this->_options;

        foreach($render as $k => $v){
            if(is_object($v)){
                $options[$k] = $v->_options;
                if(is_array($options[$k]))
                    $options[$k] = $this->getOption($options[$k]);
            }else
                $options[$k] = $v;
        }
        return $options;
    }

    public function setOption(array $options = array())
    {
        foreach($options as $k => $v)
            $this->offsetSet($k, $v);
    }

}



