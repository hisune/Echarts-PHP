<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis;

class NameTextStyle
{            
        
    /**
     * @var string 坐标轴名称的颜色，默认取 axisLine.lineStyle.color。
     */
    public $color;        
        
    /**
     * @var string 坐标轴名称文字字体的风格
     * 可选：
     * 
     * normal
     * italic
     * oblique
     */
    public $fontStyle = 'normal';        
        
    /**
     * @var string 坐标轴名称文字字体的粗细
     * 可选：
     * 
     * normal
     * bold
     * bolder
     * lighter
     * 100 | 200 | 300 | 400...
     */
    public $fontWeight = 'normal';        
        
    /**
     * @var string 坐标轴名称文字的字体系列
     */
    public $fontFamily = 'sans-serif';        
        
    /**
     * @var int 坐标轴名称文字的字体大小
     */
    public $fontSize = 12;

}