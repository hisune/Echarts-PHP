<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

class HoverAnimation
{            
        
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
     * @var int|callable 动画开始之前的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
     * 如下示例：
     * animationDelay: function (dataIndex, params) {
     *     return params.index * 30;
     * }
     * 或者反向：
     * animationDelay: function (dataIndex, params) {
     *     return (params.count - 1 - params.index) * 30;
     * }
     * 
     * 例子：
     */
    public $animationDelay = 0;        
        
    /**
     * @var int|callable 数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
     * 如下示例：
     * animationDelay: function (dataIndex, params) {
     *     return params.index * 30;
     * }
     * 或者反向：
     * animationDelay: function (dataIndex, params) {
     *     return (params.count - 1 - params.index) * 30;
     * }
     * 
     * 例子：
     */
    public $animationDelayUpdate = 0;

}