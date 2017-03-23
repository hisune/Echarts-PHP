<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Toolbox
{            
        
    /**
     * @var boolean 是否显示工具栏组件。
     */
    public $show = true;        
        
    /**
     * @var string 工具栏 icon 的布局朝向。
     * 可选：
     * 
     * horizontal
     * vertical
     */
    public $orient = 'horizontal';        
        
    /**
     * @var int 工具栏 icon 的大小。
     */
    public $itemSize = 15;        
        
    /**
     * @var int 工具栏 icon 每项之间的间隔。横向布局时为水平间隔，纵向布局时为纵向间隔。
     */
    public $itemGap = 10;        
        
    /**
     * @var boolean 是否在鼠标 hover 的时候显示每个工具 icon 的标题。
     */
    public $showTitle = true;        
        
    /**
     * @var Toolbox\Feature 各工具配置项。
     * 除了各个内置的工具按钮外，还可以自定义工具按钮。
     * 注意，自定义的工具名字，只能以 my 开头，例如下例中的 myTool1，myTool2：
     * {
     *     toolbox: {
     *         feature: {
     *             myTool1: {
     *                 show: true,
     *                 title: 自定义扩展方法1,
     *                 icon: path://M432.45,595.444c0,2.177-4.661,6.82-11.305,6.82c-6.475,0-11.306-4.567-11.306-6.82s4.852-6.812,11.306-6.812C427.841,588.632,432.452,593.191,432.45,595.444L432.45,595.444z M421.155,589.876c-3.009,0-5.448,2.495-5.448,5.572s2.439,5.572,5.448,5.572c3.01,0,5.449-2.495,5.449-5.572C426.604,592.371,424.165,589.876,421.155,589.876L421.155,589.876z M421.146,591.891c-1.916,0-3.47,1.589-3.47,3.549c0,1.959,1.554,3.548,3.47,3.548s3.469-1.589,3.469-3.548C424.614,593.479,423.062,591.891,421.146,591.891L421.146,591.891zM421.146,591.891,
     *                 onclick: function (){
     *                     alert(myToolHandler1)
     *                 }
     *             },
     *             myTool2: {
     *                 show: true,
     *                 title: 自定义扩展方法,
     *                 icon: image://http://echarts.baidu.com/images/favicon.png,
     *                 onclick: function (){
     *                     alert(myToolHandler2)
     *                 }
     *             }
     *         }
     *     }
     * }
     */
    public $feature;        
        
    /**
     * @var Toolbox\IconStyle 公用的 icon 样式设置。
     */
    public $iconStyle;        
        
    /**
     * @var int 所有图形的 zlevel 值。
     * zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
     * zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
     */
    public $zlevel = 0;        
        
    /**
     * @var int 组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
     * z相比zlevel优先级更低，而且不会创建新的 Canvas。
     */
    public $z = 2;        
        
    /**
     * @var string|int 工具栏组件离容器左侧的距离。
     * left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
     * 如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
     */
    public $left = 'auto';        
        
    /**
     * @var string|int 工具栏组件离容器上侧的距离。
     * top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
     * 如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
     */
    public $top = 'auto';        
        
    /**
     * @var string|int 工具栏组件离容器右侧的距离。
     * right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $right = 'auto';        
        
    /**
     * @var string|int 工具栏组件离容器下侧的距离。
     * bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $bottom = 'auto';        
        
    /**
     * @var string|int 工具栏组件的宽度。默认自适应。
     */
    public $width = 'auto';        
        
    /**
     * @var string|int 工具栏组件的高度。默认自适应。
     */
    public $height = 'auto';

}