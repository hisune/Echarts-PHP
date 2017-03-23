<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\YAxis\SplitLine;

class LineStyle
{            
        
    /**
     * @var array|string 分隔线颜色，可以设置成单个颜色。
     * 也可以设置成颜色数组，分隔线会按数组中颜色的顺序依次循环设置颜色。
     * 示例
     * splitLine: {
     *     lineStyle: {
     *         // 使用深浅的间隔色
     *         color: [#aaa, #ddd]
     *     }
     * }
     */
    public $color = '[\'#ccc\']';        
        
    /**
     * @var int 分隔线线宽。
     */
    public $width = 1;        
        
    /**
     * @var string 分隔线线的类型。
     * 可选：
     * 
     * solid
     * dashed
     * dotted
     */
    public $type = 'solid';        
        
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