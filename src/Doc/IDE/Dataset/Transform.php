<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Dataset;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'filter'
 *    
 *
 * @property * $config
 *    The condition of transform filter.
 *     See the tutorial of data transform.
 *
 * @property boolean $print Default: false
 *    When using data transform, we might run into the trouble that the final chart do not display correctly but we do not know where the config is wrong. There is a property transform.print might help in such case. (transform.print is only available in dev environment).
 *     option = {
 *         dataset: [{
 *             source: [ ... ]
 *         }, {
 *             transform: {
 *                 type: filter,
 *                 config: { ... }
 *                 // The result of this transform will be printed
 *                 // in dev tool via `console.log`.
 *                 print: true
 *             }
 *         }],
 *         ...
 *     }
 *
 * {_more_}
 */
class Transform extends Property {}