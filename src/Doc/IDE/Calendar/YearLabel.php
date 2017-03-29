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
 * @property int $margin Default: 30
 *    年份与轴线之间的距离
 *
 * @property string $position
 *    年份的位置
 *     默认横向是left 竖向是top
 *     可选：
 *     
 *     top
 *     bottom
 *     left
 *     right
 *
 * @property string|callable $formatter
 *    用来格式化年份文本，支持字符串模板和回调函数两种形式。
 *     默认显示当前范围的年  若区间跨年 显示(start-end)
 *     示例：
 *     // 使用字符串模板，例如：[2017-10-11, 2018-01-21]
 *     
 *         模板变量{nameMap} 年份原本名称 eg：2017-2018
 *         模板变量{start}   开始年份 eg: 2017
 *         模板变量{end}   结束年份 eg: 2018
 *     
 *     
 *     formatter: {start}-{end}
 *     // 使用回调函数
 *     
 *         param.nameMap 年份原本名称 eg：2017-2018
 *         param.start   开始年份 eg: 2017
 *         param.end   结束年份 eg: 2018
 *     
 *     formatter: function (param) {
 *         // ...
 *         return param.end;
 *     }
 *
 * @property YearLabel\TextStyle $textStyle
 *    普通状态下的标签文本样式。
 *
 * {_more_}
 */
class YearLabel extends Property {}