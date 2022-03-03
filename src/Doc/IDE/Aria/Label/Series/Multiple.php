<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Label\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $prefix Default: '. It consists of {seriesCount} series count.'
 *    A holistic description for all series is displayed before each series description. This includes the template variable.
 *     
 *     {seriesCount}: will be replaced with the number of series.
 *
 * @property string $withName Default: ' The {seriesId} series is a {seriesType} representing {seriesName}.'
 *    This description is used if the series has the name attribute. This includes the template variable.
 *     
 *     {seriesName}: will be replaced with name of the series.
 *     {seriesType}: the name of the type that will be replaced with the series, e.g. Bar chart, Line chart, etc.
 *
 * @property string $withoutName Default: ' The {seriesId} series is a {seriesType}.'
 *    This description is used if the series has no name attribute. This includes the template variable.
 *     
 *     {seriesType}: the name of the type that will be replaced with the name of the series, e.g. Bar chart, Line chart, etc.
 *
 * @property Multiple\Separator $separator
 *    The separator between the series and the description of the series.
 *
 * {_more_}
 */
class Multiple extends Property {}