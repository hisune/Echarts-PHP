<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 14:01
 */
namespace Hisune\EchartsPHP;

/**
 * Class ECharts
 * Created by Hisune EchartsPHP AutoGenerate.
 * @package Hisune\EchartsPHP
 *
 * @property Doc\IDE\Title $title
 * @property Doc\IDE\Legend $legend
 * @property Doc\IDE\Tooltip $tooltip
 * @property Doc\IDE\Grid $grid
 * @property Doc\IDE\XAxis $xAxis
 * @property Doc\IDE\YAxis $yAxis
 * @property Doc\IDE\Polar $polar
 * @property Doc\IDE\RadiusAxis $radiusAxis
 * @property Doc\IDE\AngleAxis $angleAxis
 * @property Doc\IDE\Radar $radar
 * @property callable $datazoom
 * @property callable $visualmap
 * @property Doc\IDE\AxisPointer $axisPointer
 * @property Doc\IDE\Toolbox $toolbox
 * @property Doc\IDE\Brush $brush
 * @property Doc\IDE\Geo $geo
 * @property Doc\IDE\Parallel $parallel
 * @property Doc\IDE\ParallelAxis $parallelAxis
 * @property Doc\IDE\SingleAxis $singleAxis
 * @property Doc\IDE\Timeline $timeline
 * @property Doc\IDE\Graphic $graphic
 * @property Doc\IDE\Calendar $calendar
 * @property callable $series
 * @property callable $color
 * @property callable $backgroundcolor
 * @property Doc\IDE\TextStyle $textStyle
 * @property callable $animation
 * @property callable $animationthreshold
 * @property callable $animationduration
 * @property callable $animationeasing
 * @property callable $animationdelay
 * @property callable $animationdurationupdate
 * @property callable $animationeasingupdate
 * @property callable $animationdelayupdate
 */
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

    public function getOption($render = null, $jsObject = false)
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
        Config::optionMethod($options);

        return $jsObject ? Config::jsonEncode($options) : $options;
    }

    public function setOption(array $options = array())
    {
        foreach($options as $k => $v)
            $this->offsetSet($k, $v);
    }

}



