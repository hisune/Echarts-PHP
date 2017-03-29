<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示详情。
 *
 * @property int $width Default: 100
 *    详情宽度。
 *
 * @property int $height Default: 40
 *    详情高度。
 *
 * @property string $backgroundColor Default: 'transparent'
 *    详情背景色。
 *
 * @property int $borderWidth Default: 0
 *    详情边框宽度。
 *
 * @property string $borderColor Default: '#ccc'
 *    详情边框颜色。
 *
 * @property array $offsetCenter Default: '[0, \'40%\']'
 *    相对于仪表盘中心的偏移位置，数组第一项是水平方向的偏移，第二项是垂直方向的偏移。可以是绝对的数值，也可以是相对于仪表盘半径的百分比。
 *
 * @property callable $formatter
 *    格式化函数或者字符串
 *     formatter: function (value) {
 *         return value.toFixed(0);
 *     }
 *
 * @property Detail\TextStyle $textStyle
 *    
 *
 * {_more_}
 */
class Detail extends Property {}