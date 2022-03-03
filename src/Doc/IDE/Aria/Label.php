<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Aria;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $enabled Default: true
 *    Whether or not to enable label generation for accessibility. When enabled, the attribute aria-label will be generated.
 *
 * @property string $description
 *    By default, an algorithm is used to automatically generate a chart description, but if you want to fully customize it, you can set this value to a description. If it is set to This is a chart showing price changes, then the value of the aria-label attribute of the chart DOM is this string.
 *     This configuration item is often used to display text that specifies a general description of the chart, when displaying individual data does not show the contents of the chart. For example, if the chart is a map with a large number of scattered points, the default algorithm can only show the locations of the data points and cannot convey the authors intent as a whole. In this case, you can specify description as what the author wants to say.
 *
 * @property Label\General $general
 *    For the overall description of the chart.
 *
 * @property Label\Series $series
 *    series-related configuration items.
 *
 * @property Label\Data $data
 *    Data-related configuration items.
 *
 * {_more_}
 */
class Label extends Property {}