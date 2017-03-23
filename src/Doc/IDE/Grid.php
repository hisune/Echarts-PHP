<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Grid
{            
        
    /**
     * @var boolean 是否显示直角坐标系网格。
     */
    public $show = false;        
        
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
     * @var string|int grid 组件离容器左侧的距离。
     * left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
     * 如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
     */
    public $left = 'auto';        
        
    /**
     * @var string|int grid 组件离容器上侧的距离。
     * top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
     * 如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
     */
    public $top = 60;        
        
    /**
     * @var string|int grid 组件离容器右侧的距离。
     * right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     */
    public $right = '10%';        
        
    /**
     * @var string|int grid 组件离容器下侧的距离。
     * bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     */
    public $bottom = 60;        
        
    /**
     * @var string|int grid 组件的宽度。默认自适应。
     */
    public $width = 'auto';        
        
    /**
     * @var string|int grid 组件的高度。默认自适应。
     */
    public $height = 'auto';        
        
    /**
     * @var boolean grid 区域是否包含坐标轴的刻度标签，在无法确定坐标轴标签的宽度，容器又比较小无法预留较多空间的时候，可以设为 true 防止标签溢出容器。
     */
    public $containLabel = false;        
        
    /**
     * @var string 网格背景色，默认透明。
     * 
     * 颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)   ，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc
     * 
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $backgroundColor = 'transparent';        
        
    /**
     * @var string 网格的边框颜色。支持的颜色格式同 backgroundColor。
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $borderColor = '#ccc';        
        
    /**
     * @var int 网格的边框线宽。
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $borderWidth = 1;        
        
    /**
     * @var int 图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
     * 示例：
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     * 
     * 注意：此配置项生效的前提是，设置了 show: true 以及值不为 tranparent 的背景色 backgroundColor。
     */
    public $shadowBlur;        
        
    /**
     * @var string 阴影颜色。支持的格式同color。
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $shadowColor;        
        
    /**
     * @var int 阴影水平方向上的偏移距离。
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $shadowOffsetX = 0;        
        
    /**
     * @var int 阴影垂直方向上的偏移距离。
     * 注意：此配置项生效的前提是，设置了 show: true。
     */
    public $shadowOffsetY = 0;

}