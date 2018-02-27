<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $link
 *    点击此节点可跳转的超链接。须 series-treemap.nodeClick 值为 link 时才生效。
 *     参见 series-treemap.data.target。
 *
 * @property string $target Default: 'blank'
 *    意义同 html &lt;a&gt; 标签中的 target，参见 series-treemap.data.link。可选值为：blank 或 self。
 *
 * @property array $children
 *    子节点，递归定义，格式同 series-treemap.data。
 *
 * @property Silent\Tooltip $tooltip
 *    本系列每个数据项中特定的 tooltip 设定。
 *
 * {_more_}
 */
class Silent extends Property {}