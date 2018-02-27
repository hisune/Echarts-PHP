<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria;

use Hisune\EchartsPHP\Property;

/**
 * @property int $maxCount Default: 10
 *    描述中每个系列最多出现的数据个数。
 *
 * @property string $allData Default: '其数据是——'
 *    当数据全部显示时采用的描述。这一配置项不会使得数据全部显示，可以通过将 aria.data.maxCount 设置为 Number.MAX_VALUE 实现全部显示的效果。
 *
 * @property string $partialData Default: '其中，前{displayCnt}项是——'
 *    当只有部分数据显示时采用的描述。其中包括模板变量：
 *     
 *     {displayCnt}：将被替换为显示的数据个数。
 *
 * @property string $withName Default: '{name}的数据是{value}'
 *    如果数据有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {name}：将被替换为数据的 name；
 *     {value}：将被替换为数据的值。
 *
 * @property string $withoutName Default: '{value}'
 *    如果数据没有 name 属性，则采用该描述。其中包括模板变量：
 *     
 *     {value}：将被替换为数据的值。
 *
 * @property Data\Separator $separator
 *    数据与数据之间描述的分隔符。
 *
 * {_more_}
 */
class Data extends Property {}