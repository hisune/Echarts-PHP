<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox;

use Hisune\EchartsPHP\Property;

/**
 * @property Feature\SaveAsImage $saveAsImage
 *    保存为图片。
 *
 * @property Feature\Restore $restore
 *    配置项还原。
 *
 * @property Feature\DataView $dataView
 *    数据视图工具，可以展现当前图表所用的数据，编辑后可以动态更新。
 *
 * @property Feature\DataZoom $dataZoom
 *    数据区域缩放。目前只支持直角坐标系的缩放。
 *
 * @property Feature\MagicType $magicType
 *    动态类型切换
 *     示例：
 *     feature: {
 *         magicType: {
 *             type: [line, bar, stack, tiled]
 *         }
 *     }
 *
 * @property Feature\Brush $brush
 *    选框组件的控制按钮。
 *     也可以不在这里指定，而是在 brush.toolbox 中指定。
 *
 * {_more_}
 */
class Feature extends Property {}