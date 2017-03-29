<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示刻度标签。
 *
 * @property int|callable $interval Default: 'auto'
 *    坐标轴刻度标签的显示间隔，在类目轴中有效。
 *     默认会采用标签不重叠的策略间隔显示标签。
 *     可以设置成 0 强制显示所有标签。
 *     如果设置为 1，表示『隔一个标签显示一个标签』，如果值为 2，表示隔两个标签显示一个标签，以此类推。
 *     可以用数值表示间隔的数据，也可以通过回调函数控制。回调函数格式如下：
 *     (index:number, value: string) =&gt; boolean
 *     
 *     第一个参数是类目的 index，第二个值是类目名称，如果跳过则返回 false。
 *
 * @property boolean $inside Default: false
 *    刻度标签是否朝内，默认朝外。
 *
 * @property int $rotate Default: 0
 *    刻度标签旋转的角度，在类目轴的类目标签显示不下的时候可以通过旋转防止标签之间重叠。
 *     旋转的角度从 -90 度到 90 度。
 *
 * @property int $margin Default: 8
 *    刻度标签与轴线之间的距离。
 *
 * @property string|callable $formatter
 *    刻度标签的内容格式器，支持字符串模板和回调函数两种形式。
 *     示例:
 *     // 使用字符串模板，模板变量为刻度默认标签 {value}
 *     formatter: {value} kg
 *     
 *     // 使用函数模板，函数参数分别为刻度数值（类目），刻度的索引
 *     formatter: function (value, index) {
 *         // 格式化成月/日，只在第一个刻度显示年份
 *         var date = new Date(value);
 *         var texts = [(date.getMonth() + 1), date.getDate()];
 *         if (index === 0) {
 *             texts.unshift(date.getYear());
 *         }
 *         return texts.join(/);
 *     }
 *
 * @property AxisLabel\TextStyle $textStyle
 *    
 *
 * {_more_}
 */
class AxisLabel extends Property {}