<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: 'rgba(180, 180, 180, 0.2)'
 *    
 *     
 *     Bar color. 
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property string $borderColor Default: '#000'
 *    
 *     
 *     The border color of bar.
 *
 * @property int $borderWidth Default: 0
 *    
 *     
 *     The border width of bar. defaults to have no border.
 *
 * @property string $borderType Default: 'solid'
 *    
 *     
 *     Border type. Can be dashed, dotted.
 *
 * @property int|array $borderRadius Default: 0
 *    
 *     
 *     The radius of rounded corner. Its unit is px. And it supports use array to respectively specify the 4 corner radiuses.
 *     For example:
 *     borderRadius: 5, // consistently set the size of 4 rounded corners
 *     borderRadius: [5, 5, 0, 0] // (clockwise upper left, upper right, bottom right and bottom left)
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * {_more_}
 */
class BackgroundStyle extends Property {}