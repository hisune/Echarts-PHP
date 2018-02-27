<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    是否开启无障碍访问。开启后将生成 aria-label 属性。
 *
 * @property string $description
 *    默认采用算法自动生成图表描述，如果用户需要完全自定义，可以将这个值设为描述。如将其设置为 这是一个展示了价格走势的图表，则 aria-label 属性的值即为该字符串。
 *     这一配置项常用于展示单个的数据并不能展示图表内容时，用户显示指定概括性描述图表的文字。例如图表是一个包含大量散点图的地图，默认的算法只能显示数据点的位置，不能从整体上传达作者的意图。这时候，可以将 description 指定为作者想表达的内容即可。
 *
 * @property Aria\General $general
 *    对于图表的整体性描述。
 *
 * @property Aria\Series $series
 *    系列相关的配置项。
 *
 * @property Aria\Data $data
 *    数据相关的配置项。
 *
 * {_more_}
 */
class Aria extends Property {}