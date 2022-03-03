<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    Whether to show the tool.
 *
 * @property array $type
 *    Enabled magic types, including line (for line charts), bar (for bar charts), stack (for stacked charts).
 *
 * @property MagicType\Title $title
 *    Title for different types, can be configured seperately.
 *
 * @property MagicType\Icon $icon
 *    the different types of icon path , which could be configurated individually.
 *
 * @property MagicType\IconStyle $iconStyle
 *    The style setting of magic type switching icon. Since icon label is displayed only when hovering on the icon, the label configuration options are available under emphasis.
 *
 * @property MagicType\Emphasis $emphasis
 *    
 *
 * @property MagicType\Option $option
 *    Configuration item for each type, which will be used when switching to certain type.
 *
 * @property MagicType\SeriesIndex $seriesIndex
 *    Series list for each type.
 *
 * {_more_}
 */
class MagicType extends Property {}