<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

class Detail
{            
        
    /**
     * @var boolean 是否显示详情。
     */
    public $show = true;        
        
    /**
     * @var int 详情宽度。
     */
    public $width = 100;        
        
    /**
     * @var int 详情高度。
     */
    public $height = 40;        
        
    /**
     * @var string 详情背景色。
     */
    public $backgroundColor = 'transparent';        
        
    /**
     * @var int 详情边框宽度。
     */
    public $borderWidth = 0;        
        
    /**
     * @var string 详情边框颜色。
     */
    public $borderColor = '#ccc';        
        
    /**
     * @var array 相对于仪表盘中心的偏移位置，数组第一项是水平方向的偏移，第二项是垂直方向的偏移。可以是绝对的数值，也可以是相对于仪表盘半径的百分比。
     */
    public $offsetCenter = '[0, \'40%\']';        
        
    /**
     * @var callable 格式化函数或者字符串
     * formatter: function (value) {
     *     return value.toFixed(0);
     * }
     */
    public $formatter;        
        
    /**
     * @var Detail\TextStyle 
     */
    public $textStyle;

}