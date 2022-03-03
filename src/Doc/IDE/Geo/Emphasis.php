<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Geo;

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
 * @property string $focus Default: 'none'
 *    
 *     Since v5.1.0
 *     
 *     When the data is highlighted, whether to fade out of other data to focus the highlighted. The following configurations are supported:
 *     
 *     none Do not fade out other data, its by default.
 *     self Only focus (not fade out) the element of the currently highlighted data.
 *     
 *     Example: 
 *     emphasis: {
 *         focus: self
 *     }
 *
 * @property Emphasis\Label $label
 *    
 *
 * @property Emphasis\ItemStyle $itemStyle
 *    
 *
 * {_more_}
 */
class Emphasis extends Property {}