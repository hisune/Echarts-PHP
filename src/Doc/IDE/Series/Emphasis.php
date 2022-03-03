<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property boolean $scale Default: true
 *    Whether to scale to highlight the data in emphasis state.
 *
 * @property string $focus Default: 'none'
 *    
 *     Since v5.0.0
 *     
 *     When the data is highlighted, whether to fade out of other data to focus the highlighted. The following configurations are supported:
 *     
 *     none Do not fade out other data, its by default.
 *     self Only focus (not fade out) the element of the currently highlighted data.
 *     
 *     
 *     series Focus on all elements of the series which the currently highlighted data belongs to.
 *     
 *     Example: 
 *     emphasis: {
 *         focus: series,
 *         blurScope: coordinateSystem
 *     }
 *
 * @property string $blurScope Default: 'coordinateSystem'
 *    
 *     Since v5.0.0
 *     
 *     The range of fade out when focus is enabled. Support the following configurations
 *     
 *     coordinateSystem
 *     series
 *     global
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 * @property Emphasis\AreaStyle $areaStyle
 *    
 *
 * @property Emphasis\EndLabel $endLabel
 *    
 *     Since v5.0.0
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has emphasis as itemStyle does.
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    Graphic style of , emphasis is the style when it is highlighted, like being hovered by mouse, or highlighted via legend connect.
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property int $scaleSize Default: 10
 *    
 *     
 *     Size of scale. Available when emphasis.scale is set true.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 * @property Emphasis\AreaStyle $areaStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    该节点的样式。
 *
 * @property Emphasis\LineStyle $lineStyle
 *    Defines the style of the tree edge.
 *
 * @property Emphasis\Label $label
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\UpperLabel $upperLabel
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property Emphasis\Label $label
 *    label 描述了每个扇形块中，文本标签的样式。
 *     优先级：series.data.label &gt; series.levels.label &gt; series.label。
 *     Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has emphasis as itemStyle does.
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    旭日图扇形块的样式。
 *     可以在 series.itemStyle 定义所有扇形块的样式，也可以在 series.levels.itemStyle 定义每一层扇形块的样式，还可以在 series.data.itemStyle 定义每个扇形块单独的样式，这三者的优先级从低到高。也就是说，如果定义了 series.data.itemStyle，将会覆盖 series.itemStyle 和 series.levels.itemStyle。
 *     优先级：series.data.itemStyle &gt; series.levels.itemStyle &gt; series.itemStyle。
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * @property Emphasis\Label $label
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 * @property Emphasis\Label $label
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\EdgeLabel $edgeLabel
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * @property Emphasis\LineStyle $lineStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 *  * @property boolean $disabled
 *    
 *     
 *     
 *     
 *     
 *     Since v5.3.0
 *     
 *     Whether to disable the emphasis state.
 *     When emphasis state is disabled. There will be no highlight effect when the mouse hovered the element, tooltip is triggered, or the legend is hovered. It can be used to improve interaction fluency when there are massive graphic elements.
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * {_more_}
 */
class Emphasis extends Property {}