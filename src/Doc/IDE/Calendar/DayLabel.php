<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否在普通状态下显示标签。
 *
 * @property int $firstDay Default: 0
 *    一周从周几开始，默认从周日开始
 *     例如：
 *     
 *     calendar: [{
 *         dayLabel: {
 *             firstDay: 1 // 从周一开始
 *         }
 *     }]
 *
 * @property int $margin Default: 0
 *    星期标签与轴线之间的距离
 *
 * @property string $position Default: 'start'
 *    星期的位置 在星期轴的开头还是结尾。
 *     可选：
 *     
 *     start
 *     end
 *
 * @property string|array $nameMap Default: 'en'
 *    星期显示的效果，默认为en
 *     可设置中英文以及自定义
 *     下标0为对应星期天的文字显示
 *     使用示例：
 *     // 快捷设置英文 [S, M, T, W, T, F, S],
 *     nameMap: en
 *     // 快捷设置中文 [日, 一, 二, 三, 四, 五, 六]
 *     nameMap: cn
 *     // 自定义设置： 中英文混杂 或者不显示
 *     nameMap: [S, 一, T, 三, , 五, S],
 *     
 *     calendar: [{
 *         dayLabel: {
 *             nameMap: en
 *         }
 *     }]
 *
 * @property DayLabel\TextStyle $textStyle
 *    普通状态下的标签文本样式。
 *
 * {_more_}
 */
class DayLabel extends Property {}