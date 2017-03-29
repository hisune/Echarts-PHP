<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

class Breadcrumb
{            
        
    /**
     * @var boolean 是否显示面包屑。
     */
    public $show = true;        
        
    /**
     * @var string|int asdf 组件离容器左侧的距离。
     * left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
     * 如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
     */
    public $left = 'center';        
        
    /**
     * @var string|int asdf 组件离容器上侧的距离。
     * top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
     * 如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
     */
    public $top = 'auto';        
        
    /**
     * @var string|int asdf 组件离容器右侧的距离。
     * right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $right = 'auto';        
        
    /**
     * @var string|int asdf 组件离容器下侧的距离。
     * bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $bottom = 0;        
        
    /**
     * @var int 面包屑的高度。
     */
    public $height = 22;        
        
    /**
     * @var int 当面包屑没有内容时候，设个最小宽度。
     */
    public $emptyItemWidth = 25;        
        
    /**
     * @var Breadcrumb\ItemStyle  图形样式，有 normal 和 emphasis 两个状态。normal 是图形在默认状态下的样式；emphasis 是图形在高亮状态下的样式，比如在鼠标悬浮或者图例联动高亮时。
     */
    public $itemStyle;

}