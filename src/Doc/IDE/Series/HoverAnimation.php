<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $animation Default: true
 *    是否开启动画。
 *
 * @property int $animationThreshold Default: 2000
 *    是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
 *
 * @property int $animationDuration Default: 1000
 *    初始动画的时长，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果：
 *     animationDuration: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    数据更新动画的时长。
 *     支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果：
 *     animationDurationUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    数据更新动画的缓动效果。
 *
 * @property int|callable $animationDelay Default: 0
 *    动画开始之前的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     或者反向：
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     例子：
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     或者反向：
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     例子：
 *
 * {_more_}
 */
class HoverAnimation extends Property {}