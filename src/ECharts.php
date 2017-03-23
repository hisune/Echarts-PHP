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
 *   标题组件，包含主标题和副标题。
 *
 * @property Doc\IDE\Legend $legend
 *   图例组件。
 *
 * @property Doc\IDE\Grid $grid
 *   直角坐标系内绘图网格，单个 grid 内最多可以放置上下两个 X 轴，左右两个 Y 轴。可以在网格上绘制折线图，柱状图，散点图（气泡图）。
 *
 * @property Doc\IDE\XAxis $xAxis
 *   直角坐标系 grid 中的 x 轴，一般情况下单个 grid 组件最多只能放左右两个 x 轴，多于两个 x 轴需要通过配置 offset 属性防止同个位置多个 x 轴的重叠。
 *
 * @property Doc\IDE\YAxis $yAxis
 *   直角坐标系 grid 中的 y 轴，一般情况下单个 grid 组件最多只能放左右两个 y 轴，多于两个 y 轴需要通过配置 offset 属性防止同个位置多个 Y 轴的重叠。
 *
 * @property Doc\IDE\Polar $polar
 *   极坐标系，可以用于散点图和折线图。每个极坐标系拥有一个角度轴和一个半径轴。
 *
 * @property Doc\IDE\RadiusAxis $radiusAxis
 *   极坐标系的径向轴。
 *
 * @property Doc\IDE\AngleAxis $angleAxis
 *   极坐标系的角度轴。
 *
 * @property Doc\IDE\Radar $radar
 *   雷达图坐标系组件，只适用于雷达图。该组件等同 ECharts 2 中的 polar 组件。因为 3 中的 polar 被重构为标准的极坐标组件，为避免混淆，雷达图使用 radar 组件作为其坐标系。
 *
 * @property callable $datazoom
 *   dataZoom 组件 用于区域缩放，从而能自由关注细节的数据信息，或者概览数据整体，或者去除离群点的影响。
 *
 * @property callable $visualmap
 *   visualMap 是视觉映射组件，用于进行『视觉编码』，也就是将数据映射到视觉元素（视觉通道）。
 *
 * @property Doc\IDE\Tooltip $tooltip
 *   提示框组件。
 *
 * @property Doc\IDE\Toolbox $toolbox
 *   工具栏。内置有导出图片，数据视图，动态类型切换，数据区域缩放，重置五个工具。
 *
 * @property Doc\IDE\Brush $brush
 *   brush 是区域选择组件，用户可以选择图中一部分数据，从而便于向用户展示被选中数据，或者他们的一些统计计算结果。
 *
 * @property Doc\IDE\Geo $geo
 *   地理坐标系组件。
 *
 * @property Doc\IDE\Parallel $parallel
 *
 *
 * @property Doc\IDE\ParallelAxis $parallelAxis
 *   这个组件是平行坐标系中的坐标轴。
 *
 * @property Doc\IDE\SingleAxis $singleAxis
 *   单轴。可以被应用到散点图中展现一维数据，如下示例
 *
 * @property Doc\IDE\Timeline $timeline
 *   timeline 组件，提供了在多个 ECharts option 间进行切换、播放等操作的功能。
 *
 * @property Doc\IDE\Graphic $graphic
 *   graphic 是原生图形元素组件。可以支持的图形元素包括：
 *
 * @property callable $series
 *   系列列表。每个系列通过 type 决定自己的图表类型
 *
 * @property callable $color
 *   调色盘颜色列表。如果系列没有设置颜色，则会依次循环从该列表中取颜色作为系列颜色。
 *
 * @property callable $backgroundcolor
 *   背景色，默认无背景。
 *
 * @property Doc\IDE\TextStyle $textStyle
 *   全局的字体样式。
 *
 * @property callable $animation
 *   是否开启动画。
 *
 * @property callable $animationthreshold
 *   是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
 *
 * @property callable $animationduration
 *   初始动画的时长，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果：
 *
 * @property callable $animationeasing
 *   初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
 *
 * @property callable $animationdelay
 *   初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
 *
 * @property callable $animationdurationupdate
 *   数据更新动画的时长。
 *
 * @property callable $animationeasingupdate
 *   数据更新动画的缓动效果。
 *
 * @property callable $animationdelayupdate
 *   数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *
 * @property callable $progressive
 *   渐进式渲染时每一帧绘制图形数量，设为 0 时不启用渐进式渲染，支持每个系列单独配置。
 *
 * @property callable $progressivethreshold
 *   启用渐进式渲染的图形数量阈值，在单个系列的图形数量超过该阈值时启用渐进式渲染。
 *
 * @property callable $blendmode
 *   图形的混合模式，不同的混合模式见 https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/globalCompositeOperation 。
 *
 * @property callable $hoverlayerthreshold
 *   图形数量阈值，决定是否开启单独的 hover 层，在整个图表的图形数量大于该阈值时开启单独的 hover 层。
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



