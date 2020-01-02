<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
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
class AnimationEasingUpdate extends Property {}