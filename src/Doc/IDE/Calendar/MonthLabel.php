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
 * @property string $align Default: 'center'
 *    设置月份区间内的月份文字位置。
 *     可选：
 *     
 *     center // 区间内的中间
 *     left  // 区间内的左边
 *
 * @property int $margin Default: 5
 *    月份标签与轴线之间的距离
 *
 * @property string $position Default: 'start'
 *    月份的位置 在开头还是结尾。
 *     可选：
 *     
 *     start
 *     end
 *
 * @property string|array $nameMap Default: 'en'
 *    月份显示的效果，默认为en
 *     可设置中英文以及自定义
 *     下标0为对应一月的文字显示
 *     使用示例：
 *     // 快捷设置英文 [
 *                     Jan, Feb, Mar,
 *                     Apr, May, Jun,
 *                     Jul, Aug, Sep,
 *                     Oct, Nov, Dec
 *                 ],
 *     nameMap: en
 *     // 快捷设置中文 [
 *                     一月, 二月, 三月,
 *                     四月, 五月, 六月,
 *                     七月, 八月, 九月,
 *                     十月, 十一月, 十二月
 *                 ]
 *     nameMap: cn
 *     // 自定义设置： 中英文混杂 或者不显示
 *     nameMap: [
 *                 一月, Feb, 三月,
 *                 四月, May, 六月,
 *                 七月, 八月, ,
 *                 十月, Nov, 十二月
 *             ],
 *     
 *     calendar: [{
 *         monthLabel: {
 *             nameMap: en
 *         }
 *     }]
 *
 * @property string|callable $formatter
 *    用来格式化月份文本，支持字符串模板和回调函数两种形式。
 *     示例：
 *     // 使用字符串模板，例如：2017-02
 *     
 *         模板变量{nameMap} 月份原本名称 eg：Feb
 *         模板变量{yyyy}   四位数年份 eg: 2017
 *         模板变量{yy}   后两位数年份 eg: 17
 *         模板变量{MM}   两位数月份 eg: 02
 *         模板变量{M}   一位数月份 eg: 2
 *     
 *     formatter: {yyyy}-{MM}
 *     // 使用回调函数
 *     
 *         param.nameMap 月份原本名称 eg：Feb
 *         param.yyyy   四位数年份 eg: 2017
 *         param.yy   后两位数年份 eg: 17
 *         param.MM   两位数月份 eg: 02
 *         param.M   一位数月份 eg: 2
 *     
 *     formatter: function (param) {
 *         // ...
 *         return param.MM;
 *     }
 *
 * @property MonthLabel\TextStyle $textStyle
 *    普通状态下的标签文本样式。
 *
 * {_more_}
 */
class MonthLabel extends Property {}