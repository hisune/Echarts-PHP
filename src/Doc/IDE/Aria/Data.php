<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria;

use Hisune\EchartsPHP\Property;

/**
 * @property int $maxCount Default: 10
 *    Maximum data number.
 *
 * @property string $allData Default: 'Its data is --'
 *    Description used when all data is displayed. Note that this option will not set to display all data. If all data should be displayed, aria.data.maxCount should be set to be Number.MAX_VALUE.
 *
 * @property string $partialData Default: 'Where the first {displayCnt} entry is -'
 *    Description used when only part of data is displayed. Template variable:
 *     
 *     {displayCnt}: number of data displayed.
 *
 * @property string $withName Default: '{name}\'s data is {value}'
 *    If data contains name attribute, then this is used. Template variable:
 *     
 *     {name}: will be replaced by data name;
 *     {value}: will be replaced by data value.
 *
 * @property string $withoutName Default: '{value}'
 *    If data doesnt contain name attribute, then this is used. Template variable:
 *     
 *     {value}: will be replaced by data value.
 *
 * @property Data\Separator $separator
 *    Separators between data and data.
 *
 * {_more_}
 */
class Data extends Property {}