<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $prefix Default: 'It consists of {seriesCount} chart series. '
 *    General description for all series. This displays before all series descriptions. Template variable:
 *     
 *     {seriesCount}: will be replaced by series count.
 *
 * @property string $withName Default: 'The chart type is {seriesType}, which means {seriesName}. '
 *    If series contains name attribute, then this is used. Template variable:
 *     
 *     {seriesName}: will be replaced by series name;
 *     {seriesType}: will be replaced by series type name.
 *
 * @property string $withoutName Default: 'The chart type is {seriesType}.'
 *    If series doesnt contain name attribute, then this is used. Template variable:
 *     
 *     {seriesType}: will be replaced by series type name.
 *
 * @property Multiple\Separator $separator
 *    Separators between series and series.
 *
 * {_more_}
 */
class Multiple extends Property {}