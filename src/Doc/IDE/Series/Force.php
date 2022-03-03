<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $initLayout
 *    The initial layout before force-directed layout, which will influence on the result of force-directed layout.
 *     It defaults not to do any layout and use x, y provided in node as the position of node. If it doesnt exist, the position will be generated randomly.
 *     You can also use circular layout circular.
 *
 * @property array|int $repulsion Default: 50
 *    
 *     
 *     The repulsion factor between nodes. The repulsion will be stronger and the distance between 2 nodes becomes further as this value becomes larger.
 *     It can be an array to represent the range of repulsion. In this case larger value have larger repulsion and smaller value will have smaller repulsion.
 *
 * @property int $gravity Default: 0.1
 *    
 *     
 *     The gravity factor enforcing nodes approach to the center. The nodes will be closer to the center as the value becomes larger.
 *
 * @property array|int $edgeLength Default: 30
 *    
 *     
 *     The distance between 2 nodes on edge. This distance is also affected by repulsion.
 *     It can be an array to represent the range of edge length. In this case edge with larger value will be shorter, which means two nodes are closer. And edge with smaller value will be longer.
 *
 * @property boolean $layoutAnimation Default: true
 *    
 *     
 *     Because the force-directed layout will be steady after several iterations, this parameter will be decide whether to show the iteration animation of layout. It is not recommended to be closed on browser when there are a lot of node data (&gt;100) as the layout process will cause browser to hang.
 *
 * @property int $friction Default: 0.6
 *    
 *     
 *     
 *     
 *     
 *     Since v4.5.0
 *     
 *     It will slow down the nodes movement. The value range is from 0 to 1.
 *     But it is still an experimental option, see #11024.
 *
 * {_more_}
 */
class Force extends Property {}