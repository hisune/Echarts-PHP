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
 *   Title component, including main title and subtitle.
 *
 * @property Doc\IDE\Legend $legend
 *   Legend component.
 *
 * @property Doc\IDE\Tooltip $tooltip
 *   Tooltip component.
 *
 * @property Doc\IDE\Grid $grid
 *   Drawing grid in rectangular coordinate. In a single grid, at most two X and Y axes each is allowed. Line chart, bar chart, and scatter chart (bubble chart) can be drawn in grid.
 *
 * @property Doc\IDE\XAxis $xAxis
 *   The x axis in cartesian(rectangular) coordinate. Usually a single grid component can place at most 2 x axis, one on the bottom and another on the top. offset can be used to avoid overlap when you need to put more than two x axis.
 *
 * @property Doc\IDE\YAxis $yAxis
 *   The y axis in cartesian(rectangular) coordinate. Usually a single grid component can place at most 2 y axis, one on the left and another on the right. offset can be used to avoid overlap when you need to put more than two y axis.
 *
 * @property Doc\IDE\Polar $polar
 *   Polar coordinate can be used in scatter and line chart. Every polar coordinate has an angleAxis and a radiusAxis.
 *
 * @property Doc\IDE\RadiusAxis $radiusAxis
 *   Radial axis of polar coordinate.
 *
 * @property Doc\IDE\AngleAxis $angleAxis
 *   The angle axis in Polar Coordinate.
 *
 * @property Doc\IDE\Radar $radar
 *   Coordinate for radar charts. This component is equal to the polar component in ECharts 2. Because the polar component in the echarts 3 is reconstructed to be the standard polar coordinate component, this component is renamed to be radar to avoid confusion.
 *
 * @property callable $datazoom
 *   dataZoom component is used for zooming a specific area, which enables user to investigate data in detail, or get an overview of the data, or get rid of outlier points.
 *
 * @property callable $visualmap
 *   visualMap is a type of component for visual encoding, which maps the data to visual channels, including:
 *
 * @property Doc\IDE\AxisPointer $axisPointer
 *   This is the global configurations of axisPointer.
 *
 * @property Doc\IDE\Toolbox $toolbox
 *   A group of utility tools, which includes export, data view, dynamic type switching, data area zooming, and reset.
 *
 * @property Doc\IDE\Brush $brush
 *   brush is an area-selecting component, with which user can select part of data from a chart to display in detail, or doing calculations with them.
 *
 * @property Doc\IDE\Geo $geo
 *   Geographic coorinate system component.
 *
 * @property Doc\IDE\Parallel $parallel
 *
 *
 * @property Doc\IDE\ParallelAxis $parallelAxis
 *   This component is the coordinate axis for parallel coordinate.
 *
 * @property Doc\IDE\SingleAxis $singleAxis
 *   An axis with a single dimension. It can be used to display data in one dimension. For example:
 *
 * @property Doc\IDE\Timeline $timeline
 *   timeline component, which provides functions like switching and playing between multiple ECharts options.
 *
 * @property Doc\IDE\Graphic $graphic
 *   graphic component enable creating graphic elements in echarts.
 *
 * @property Doc\IDE\Calendar $calendar
 *   Calendar coordinates.
 *
 * @property callable $series
 *
 * @property callable $color
 *   The color list of palette. If no color is set in series, the colors would be adopted sequentially and circularly from this list as the colors of series.
 *
 * @property callable $backgroundcolor
 *   Background color. Defaults to have no background.
 *
 * @property Doc\IDE\TextStyle $textStyle
 *   Global font style.
 *
 * @property callable $animation
 *   Whether to enable animation.
 *
 * @property callable $animationthreshold
 *   Whether to set graphic number threshold to animation. Animation will be disabled when graphic number is larger than threshold.
 *
 * @property callable $animationduration
 *   Duration of the first animation, which supports callback function for different data to have different animation effect:
 *
 * @property callable $animationeasing
 *   Easing method used for the first animation. Varied easing effects can be found at easing effect example.
 *
 * @property callable $animationdelay
 *   Delay before updating the first animation, which supports callback function for different data to have different animation effect.
 *
 * @property callable $animationdurationupdate
 *   Time for animation to complete, which supports callback function for different data to have different animation effect:
 *
 * @property callable $animationeasingupdate
 *   Easing method used for animation.
 *
 * @property callable $animationdelayupdate
 *   Delay before updating animation, which supports callback function for different data to have different animation effect.
 *
 */
class ECharts implements \ArrayAccess
{

    public $_options = [];

    /**
     * @param $dist string, dist of libraries
     */
    public function __construct($dist = '')
    {
        if ($dist)
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

    public function render($id, $attribute = array(), $theme = null)
    {
        return Config::render($id, $this->getOption(), $theme, $attribute);
    }

    public function getOption($render = null, $jsObject = false)
    {
        $options = [];
        is_null($render) && $render = $this->_options;

        foreach ($render as $k => $v) {
            if (is_object($v)) {
                $options[$k] = $v->_options;
                if (is_array($options[$k]))
                    $options[$k] = $this->getOption($options[$k]);
            } else
                $options[$k] = $v;
        }
        Config::optionMethod($options);

        return $jsObject ? Config::jsonEncode($options) : $options;
    }

    public function setOption(array $options = array())
    {
        foreach ($options as $k => $v)
            $this->offsetSet($k, $v);
    }

}



