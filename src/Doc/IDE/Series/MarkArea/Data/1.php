<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkArea\Data;

class 1
{            
        
    /**
     * @var string 特殊的标注类型，用于标注最大值最小值等。
     * 可选:
     * 
     * min 最大值。
     * max 最大值。
     * average 平均值。
     */
    public $type;        
        
    /**
     * @var int 在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
     */
    public $valueIndex;        
        
    /**
     * @var string 在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
     */
    public $valueDim;        
        
    /**
     * @var array 起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
     */
    public $coord;        
        
    /**
     * @var int 相对容器的屏幕 x 坐标，单位像素，支持百分比形式，例如 20%。
     */
    public $x;        
        
    /**
     * @var int 相对容器的屏幕 y 坐标，单位像素，支持百分比形式，例如 20%。
     */
    public $y;        
        
    /**
     * @var int 标域值，可以不设。
     */
    public $value;        
        
    /**
     * @var 1\ItemStyle 该数据项区域的样式，起点和终点项的itemStyle会合并到一起。
     */
    public $itemStyle;        
        
    /**
     * @var 1\Label 该数据项标签的样式，起点和终点项的label会合并到一起。
     */
    public $label;

}