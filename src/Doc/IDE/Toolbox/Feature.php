<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox;

use Hisune\EchartsPHP\Property;

/**
 * @property Feature\SaveAsImage $saveAsImage
 *    Save as image.
 *
 * @property Feature\Restore $restore
 *    Restore configuration item.
 *
 * @property Feature\DataView $dataView
 *    Data view tool, which could display data in current chart and updates chart after being edited.
 *
 * @property Feature\DataZoom $dataZoom
 *    Data area zooming, which only supports rectangular coordinate by now.
 *
 * @property Feature\MagicType $magicType
 *    Magic type switching.
 *     示例: 
 *     feature: {
 *         magicType: {
 *             type: [line, bar, stack]
 *         }
 *     }
 *
 * @property Feature\Brush $brush
 *    Brush-selecting icon.
 *     It can also be configured at brush.toolbox.
 *
 * {_more_}
 */
class Feature extends Property {}