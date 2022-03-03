<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $animation Default: true
 *    
 *     
 *     Whether to enable animation.
 *
 * @property int $animationThreshold Default: 2000
 *    Whether to set graphic number threshold to animation. Animation will be disabled when graphic number is larger than threshold.
 *
 * @property int|callable $animationDuration Default: 1000
 *    
 *     
 *     Duration of the first animation, which supports callback function for different data to have different animation effect:
 *     animationDuration: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    
 *     
 *     Easing method used for the first animation. Varied easing effects can be found at easing effect example.
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    
 *     
 *     Time for animation to complete, which supports callback function for different data to have different animation effect:
 *     animationDurationUpdate: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    
 *     
 *     Easing method used for animation.
 *
 * @property int|callable $animationDelay Default: 0
 *    Specify the delay time before animation start. Callback function can be used, where different delay time can be used on different element.
 *     For example:
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     // Or inverse:
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     For example:
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    Specify the delay time before update animation. Callback function can be used, where different delay time can be used on different element.
 *     For example:
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     // Or inverse:
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     For example:
 *
 * {_more_}
 */
class HoverAnimation extends Property {}