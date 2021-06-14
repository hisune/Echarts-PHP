<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property Downplay\Label $label
 *    label sets the text style for every sectors.
 *     Priority: series.data.label &gt; series.levels.label &gt; series.label.
 *     Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has emphasis as itemStyle does.
 *
 * @property Downplay\ItemStyle $itemStyle
 *    Style of Sunburst sectors.
 *     Style can be set in series.itemStyle for sectors of this series, or series.levels.itemStyle for the whole level, orseries.data.itemStyle for single sector. If series.data.itemStyle is defined, it will cover the setting of series.itemStyle and series.levels.itemStyle.
 *     Priority: series.data.itemStyle &gt; series.levels.itemStyle &gt; series.itemStyle.
 *     In ECharts, emphasis is for styles when mouse hovers. For Sunburst charts, there are two extra states: highlight for highlighting items that relates to the emphasized one, and downplay for others when emphasizing an item. See highlightPolicy.
 *
 * {_more_}
 */
class Downplay extends Property {}