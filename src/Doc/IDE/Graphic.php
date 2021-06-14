<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property array $elements
 *    A list of all graphic elements.
 *     Note, the standard configuration of graphic component is:
 *     {
 *         graphic: {
 *             elements: [
 *                 {type: rect, ...}, {type: circle, ...}, ...
 *             ]
 *         }
 *     }
 *     
 *     But we always use short patterns for convenience:
 *     {
 *         graphic: { // Declare only one graphic element.
 *             type: rect,
 *             ...
 *         }
 *     }
 *     
 *     Or:
 *     {
 *         graphic: [ // Declare multiple graphic elements.
 *             {type: rect, ...}, {type: circle, ...}, ...
 *         ]
 *     }
 *
 * {_more_}
 */
class Graphic extends Property {}