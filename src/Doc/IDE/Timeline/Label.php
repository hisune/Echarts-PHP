<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

use Hisune\EchartsPHP\Property;

/**
 * @property string|int $position Default: 'auto'
 *    可选的配置方式：
 *     
 *     auto：
 *       完全自动决定。
 *     
 *     left：
 *       贴左边界放置。
 *       当 timline.orient 为 vertical 时有效。
 *     
 *     right：当 timline.orient 为 vertical 时有效。
 *       贴右边界放置。
 *     
 *     top：
 *       贴上边界放置。
 *       当 timline.orient 为 horizontal 时有效。
 *     
 *     bottom：
 *       贴下边界放置。
 *       当 timline.orient 为 horizontal 时有效。
 *     
 *     number：
 *       指定某个数值时，表示 label 和轴的距离。为 0 时则和坐标轴重合，可以为正负值，决定 label 在坐标轴的哪一边。
 *
 * @property Label\Normal $normal
 *    
 *
 * @property Label\Emphasis $emphasis
 *    
 *
 * {_more_}
 */
class Label extends Property {}