<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis\AxisPointer;

class Handle
{            
        
    /**
     * @var boolean 当 show 设为 true 时开启，这时显示手柄，并且 axisPointer 会一直显示。
     */
    public $show = false;        
        
    /**
     * @var * 手柄的图标。
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     * 也可以通过 image://url 设置为图片，其中 url 为图片的链接。
     * 参见 使用图片的例子
     */
    public $icon;        
        
    /**
     * @var int|array 手柄的尺寸，可以设置单值，如 45，也可以设置为数组：[width, height]。
     */
    public $size = 45;        
        
    /**
     * @var int 手柄与轴的距离。注意，这是手柄中心点和轴的距离。
     */
    public $margin = 50;        
        
    /**
     * @var string 手柄颜色。
     */
    public $color = '#333';        
        
    /**
     * @var int 手柄拖拽时触发视图更新周期，单位毫秒，调大这个数值可以改善性能，但是降低体验。
     */
    public $throttle = 40;        
        
    /**
     * @var int 图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
     * 示例：
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     */
    public $shadowBlur = 3;        
        
    /**
     * @var string 阴影颜色。支持的格式同color。
     */
    public $shadowColor = '#aaa';        
        
    /**
     * @var int 阴影水平方向上的偏移距离。
     */
    public $shadowOffsetX = 2;        
        
    /**
     * @var int 阴影垂直方向上的偏移距离。
     */
    public $shadowOffsetY = 0;

}