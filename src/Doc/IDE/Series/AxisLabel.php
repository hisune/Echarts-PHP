<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示标签。
 *
 * @property int $distance Default: 5
 *    标签与刻度线的距离。
 *
 * @property string|callable $formatter
 *    刻度标签的内容格式器，支持字符串模板和回调函数两种形式。
 *     示例:
 *     // 使用字符串模板，模板变量为刻度默认标签 {value}
 *     formatter: {value} kg
 *     
 *     // 使用函数模板，函数参数分别为刻度数值
 *     formatter: function (value) {
 *         return value + km/h;
 *     }
 *
 * @property AxisLabel\TextStyle $textStyle
 *    
 *
 * @property string $color Default: 'auto'
 *    刻度颜色
 *
 * {_more_}
 */
class AxisLabel extends Property {}