<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $initLayout
 *    进行力引导布局前的初始化布局，初始化布局会影响到力引导的效果。
 *     默认不进行任何布局，使用节点中提供的 x， y 作为节点的位置。如果不存在的话会随机生成一个位置。
 *     也可以选择使用环形布局 circular。
 *
 * @property array|int $repulsion Default: 50
 *    节点之间的斥力因子。
 *     支持设置成数组表达斥力的范围，此时不同大小的值会线性映射到不同的斥力。值越大则斥力越大
 *
 * @property int $gravity Default: 0.1
 *    节点受到的向中心的引力因子。该值越大节点越往中心点靠拢。
 *
 * @property array|int $edgeLength Default: 30
 *    边的两个节点之间的距离，这个距离也会受 repulsion。
 *     支持设置成数组表达边长的范围，此时不同大小的值会线性映射到不同的长度。值越小则长度越长。如下示例
 *     // 值最大的边长度会趋向于 10，值最小的边长度会趋向于 50
 *     edgeLength: [10, 50]
 *
 * @property boolean $layoutAnimation Default: true
 *    因为力引导布局会在多次迭代后才会稳定，这个参数决定是否显示布局的迭代动画，在浏览器端节点数据较多（&gt;100）的时候不建议关闭，布局过程会造成浏览器假死。
 *
 * {_more_}
 */
class Force extends Property {}