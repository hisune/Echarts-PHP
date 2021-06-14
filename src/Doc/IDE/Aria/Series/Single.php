<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $prefix Default: ''
 *    General description for all series. This displays before all series descriptions. Template variable:
 *     
 *     {seriesCount}: will be replaced by series count, which is 1.
 *
 * @property string $withName Default: 'The chart type is {seriesType}, which means {seriesName}. '
 *    If chart contains name attribute, then this is used. Template variable:
 *     
 *     {seriesName}: will be replaced by the series name;
 *     {seriesType}: will be replaced by the series type name.
 *
 * @property string $withoutName Default: 'The chart type is {seriesType}.'
 *    If chart doesnt contain name attribute, then this is used. Template variable:
 *     
 *     {seriesType}: will be replaced by series type name.
 *
 * {_more_}
 */
class Single extends Property {}