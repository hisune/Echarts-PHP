<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示该工具。
 *
 * @property array $type
 *    启用的动态类型，包括line（切换为折线图）, bar（切换为柱状图）, stack（切换为堆叠模式）, tiled（切换为平铺模式）。
 *
 * @property MagicType\Title $title
 *    各个类型的标题文本，可以分别配置。
 *
 * @property MagicType\Icon $icon
 *    各个类型的 icon path，可以分别配置。
 *
 * @property MagicType\IconStyle $iconStyle
 *    动态类型切换 icon 样式设置。
 *
 * @property MagicType\Emphasis $emphasis
 *    
 *
 * @property MagicType\Option $option
 *    各个类型的专有配置项。在切换到某类型的时候会合并相应的配置项。
 *
 * @property MagicType\SeriesIndex $seriesIndex
 *    各个类型对应的系列的列表。
 *
 * {_more_}
 */
class MagicType extends Property {}