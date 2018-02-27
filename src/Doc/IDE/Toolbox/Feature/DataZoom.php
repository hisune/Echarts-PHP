<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示该工具。
 *
 * @property DataZoom\Title $title
 *    缩放和还原的标题文本。
 *
 * @property DataZoom\Icon $icon
 *    缩放和还原的 icon path。
 *
 * @property DataZoom\IconStyle $iconStyle
 *    数据区域缩放 icon 样式设置。
 *
 * @property DataZoom\Emphasis $emphasis
 *    
 *
 * @property int|array|boolean $xAxisIndex
 *    指定哪些 xAxis 被控制。如果缺省则控制所有的x轴。如果设置为 false 则不控制任何x轴。如果设置成 3 则控制 axisIndex 为 3 的x轴。如果设置为 [0, 3] 则控制 axisIndex 为 0 和 3 的x轴。
 *
 * @property int|array|boolean $yAxisIndex
 *    指定哪些 yAxis 被控制。如果缺省则控制所有的y轴。如果设置为 false 则不控制任何y轴。如果设置成 3 则控制 axisIndex 为 3 的y轴。如果设置为 [0, 3] 则控制 axisIndex 为 0 和 3 的y轴。
 *
 * {_more_}
 */
class DataZoom extends Property {}