<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\AxisLine;

class LineStyle
{            
        
    /**
     * @var array 仪表盘的轴线可以被分成不同颜色的多段。每段的结束位置和颜色可以通过一个数组来表示。
     * 默认取值：
     * [[0.2, #91c7ae], [0.8, #63869e], [1, #c23531]]
     */
    public $color;        
        
    /**
     * @var int 轴线宽度。
     */
    public $width = 30;        
        
    /**
     * @var int 图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
     * 示例：
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     */
    public $shadowBlur;        
        
    /**
     * @var string 阴影颜色。支持的格式同color。
     */
    public $shadowColor;        
        
    /**
     * @var int 阴影水平方向上的偏移距离。
     */
    public $shadowOffsetX = 0;        
        
    /**
     * @var int 阴影垂直方向上的偏移距离。
     */
    public $shadowOffsetY = 0;        
        
    /**
     * @var int 图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
     */
    public $opacity;

}