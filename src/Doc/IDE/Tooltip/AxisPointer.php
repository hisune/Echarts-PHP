<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Tooltip;

class AxisPointer
{            
        
    /**
     * @var string 指示器类型。
     * 可选
     * 
     * line 直线指示器
     * 
     * cross 十字准星指示器
     * 
     * shadow 阴影指示器
     */
    public $type = 'line';        
        
    /**
     * @var string 指示器的坐标轴。可以是 x, y, radius, angle。默认取类目轴或者时间轴。
     */
    public $axis = 'auto';        
        
    /**
     * @var boolean 是否开启动画。
     */
    public $animation = true;        
        
    /**
     * @var int 是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
     */
    public $animationThreshold = 2000;        
        
    /**
     * @var int 初始动画的时长，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果：
     * animationDuration: function (idx) {
     *     // 越往后的数据延迟越大
     *     return idx * 100;
     * }
     */
    public $animationDuration = 1000;        
        
    /**
     * @var string 初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
     */
    public $animationEasing = 'cubicOut';        
        
    /**
     * @var int|callable 初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
     * 如下示例：
     * animationDelay: function (idx) {
     *     // 越往后的数据延迟越大
     *     return idx * 100;
     * }
     * 
     * 也可以看该示例
     */
    public $animationDelay = 0;        
        
    /**
     * @var int|callable 数据更新动画的时长。
     * 支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果：
     * animationDurationUpdate: function (idx) {
     *     // 越往后的数据延迟越大
     *     return idx * 100;
     * }
     */
    public $animationDurationUpdate = 300;        
        
    /**
     * @var string 数据更新动画的缓动效果。
     */
    public $animationEasingUpdate = 'cubicOut';        
        
    /**
     * @var int|callable 数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
     * 如下示例：
     * animationDelayUpdate: function (idx) {
     *     // 越往后的数据延迟越大
     *     return idx * 100;
     * }
     * 
     * 也可以看该示例
     */
    public $animationDelayUpdate = 0;        
        
    /**
     * @var AxisPointer\LineStyle axisPointer.type 为 line 时有效。
     */
    public $lineStyle;        
        
    /**
     * @var AxisPointer\CrossStyle axisPointer.type 为 cross 时有效。
     */
    public $crossStyle;        
        
    /**
     * @var AxisPointer\ShadowStyle axisPointer.type 为 shadow 时有效。
     */
    public $shadowStyle;

}