<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Title
{            
        
    /**
     * @var boolean 是否显示标题组件。
     */
    public $show = true;        
        
    /**
     * @var string 主标题文本，支持使用 \n 换行。
     */
    public $text = '';        
        
    /**
     * @var string 主标题文本超链接。
     */
    public $link = '';        
        
    /**
     * @var string 指定窗口打开主标题超链接。
     * 可选：
     * 
     * self 当前窗口打开
     * 
     * blank 新窗口打开
     */
    public $target = 'blank';        
        
    /**
     * @var Title\TextStyle 
     */
    public $textStyle;        
        
    /**
     * @var string 标题文本水平对齐，支持 left, center, right，默认根据标题位置决定。
     */
    public $textAlign;        
        
    /**
     * @var string 标题文本垂直对齐，支持 top, middle, bottom，默认根据标题位置决定。
     */
    public $textBaseline;        
        
    /**
     * @var string 副标题文本，支持使用 \n 换行。
     */
    public $subtext = '';        
        
    /**
     * @var string 副标题文本超链接。
     */
    public $sublink = '';        
        
    /**
     * @var string 指定窗口打开副标题超链接，可选：
     * 
     * self 当前窗口打开
     * 
     * blank 新窗口打开
     */
    public $subtarget = 'blank';        
        
    /**
     * @var Title\SubtextStyle 
     */
    public $subtextStyle;        
        
    /**
     * @var int 标题内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
     * 使用示例：
     * // 设置内边距为 5
     * padding: 5
     * // 设置上下的内边距为 5，左右的内边距为 10
     * padding: [5, 10]
     * // 分别设置四个方向的内边距
     * padding: [
     *     5,  // 上
     *     10, // 右
     *     5,  // 下
     *     10, // 左
     * ]
     */
    public $padding = 5;        
        
    /**
     * @var int 主副标题之间的间距。
     */
    public $itemGap = 10;        
        
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
    public $top = 'auto';        
        
    /**
     * @var string|int grid 组件离容器右侧的距离。
     * right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $right = 'auto';        
        
    /**
     * @var string|int grid 组件离容器下侧的距离。
     * bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     * 默认自适应。
     */
    public $bottom = 'auto';        
        
    /**
     * @var string 标题背景色，默认透明。
     * 
     * 颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)   ，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc
     */
    public $backgroundColor = 'transparent';        
        
    /**
     * @var string 标题的边框颜色。支持的颜色格式同 backgroundColor。
     */
    public $borderColor = '#ccc';        
        
    /**
     * @var int 标题的边框线宽。
     */
    public $borderWidth = 0;        
        
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