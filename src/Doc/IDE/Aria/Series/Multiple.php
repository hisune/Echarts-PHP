<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $prefix Default: '它由{seriesCount}个图表系列组成。'
 *    对于所有系列的整体性描述，显示在每个系列描述之前。其中包括模板变量：
 *     
 *     {seriesCount}：将被替换为系列个数。
 *
 * @property string $withName Default: '图表类型是{seriesType}，表示{seriesName}。'
 *    如果系列有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {seriesName}：将被替换为系列的 name；
 *     {seriesType}：将被替换为系列的类型名称，如：柱状图、 折线图 等等。
 *
 * @property string $withoutName Default: '图表类型是{seriesType}。'
 *    如果系列没有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {seriesType}：将被替换为系列的类型名称，如：柱状图、 折线图 等等。
 *
 * @property Multiple\Separator $separator
 *    系列与系列之间描述的分隔符。
 *
 * {_more_}
 */
class Multiple extends Property {}