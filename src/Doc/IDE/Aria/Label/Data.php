<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Label;

use Hisune\EchartsPHP\Property;

/**
 * @property int $maxCount Default: 10
 *    The maximum number of data occurrences per series in the description.
 *
 * @property string $allData Default: 'whose data is --'
 *    Description to be used when all data is displayed. This item doesnt make all the data displayed. It can be achieved by setting aria.data.maxCount to Number.MAX_VALUE.
 *
 * @property string $partialData Default: 'where the first {displayCnt} term is --'
 *    Descriptions used when only partial data is displayed. This includes template variables.
 *     
 *     {displayCnt}: the number of data that will be replaced with the number of displays.
 *
 * @property string $withName Default: 'The data for {name} is {value}'
 *    This description is used if the data has the name attribute. This includes the template variable.
 *     
 *     {name}: name that will be replaced with the data.
 *     {value}: the value that will be replaced with the data.
 *
 * @property string $withoutName Default: '{value}'
 *    This description is used if the data does not have the name attribute. This includes the template variable.
 *     
 *     {value}: the value that will be replaced with the data.
 *
 * @property Data\Separator $separator
 *    The separator between data and data description.
 *
 * {_more_}
 */
class Data extends Property {}