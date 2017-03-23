<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\ParallelAxis;

class AxisTick
{            
        
    /**
     * @var boolean 是否显示坐标轴刻度。
     */
    public $show = true;        
        
    /**
     * @var boolean 类目轴中在 boundaryGap 为 true 的时候有效，可以保证刻度线和标签对齐。如下图：
     */
    public $alignWithLabel = false;        
        
    /**
     * @var int|callable 坐标轴刻度的显示间隔，在类目轴中有效。默认同 axisLabel.interval 一样。
     * 默认会采用标签不重叠的策略间隔显示标签。
     * 可以设置成 0 强制显示所有标签。
     * 如果设置为 1，表示『隔一个标签显示一个标签』，如果值为 2，表示隔两个标签显示一个标签，以此类推。
     * 可以用数值表示间隔的数据，也可以通过回调函数控制。回调函数格式如下：
     * (index:number, value: string) =&gt; boolean
     * 
     * 第一个参数是类目的 index，第二个值是类目名称，如果跳过则返回 false。
     */
    public $interval = 'auto';        
        
    /**
     * @var boolean 坐标轴刻度是否朝内，默认朝外。
     */
    public $inside = false;        
        
    /**
     * @var int 坐标轴刻度的长度。
     */
    public $length = 5;        
        
    /**
     * @var AxisTick\LineStyle 
     */
    public $lineStyle;

}