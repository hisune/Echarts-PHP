<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria\Label\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $prefix Default: ''
 *    Holistic descriptions for all series are shown before each series description. This includes template variables.
 *     
 *     {seriesCount}: will be replaced with the number of series, where it is always 1.
 *
 * @property string $withName Default: ' with type {seriesType} named {seriesName}.'
 *    This description is used if the series has the name attribute. This includes the template variable.
 *     
 *     {seriesName}: will be replaced with name of the series.
 *     {seriesType}: the name of the type that will be replaced with the series, e.g. Bar chart, Line chart, etc.
 *
 * @property string $withoutName Default: ' with type {seriesType}.'
 *    This description is used if the series has no name attribute. This includes the template variable.
 *     
 *     {seriesType}: the name of the type that will be replaced with the series, e.g. Bar chart, Line chart, etc.
 *
 * {_more_}
 */
class Single extends Property {}