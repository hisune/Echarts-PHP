<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示『控制按钮』。设置为 false 则全不显示。
 *
 * @property boolean $showPlayBtn Default: true
 *    是否显示『播放按钮』。
 *
 * @property boolean $showPrevBtn Default: true
 *    是否显示『后退按钮』。
 *
 * @property boolean $showNextBtn Default: true
 *    是否显示『前进按钮』。
 *
 * @property int $itemSize Default: 22
 *    『控制按钮』的尺寸，单位为像素（px）。
 *
 * @property int $itemGap Default: 12
 *    『控制按钮』的间隔，单位为像素（px）。
 *
 * @property string $position Default: 'left'
 *    『控制按钮』的位置。
 *     
 *     当 timeline.orient 为 horizontal时，left、right有效。
 *     
 *     当 timeline.orient 为 vertical时，top、bottom有效。
 *
 * @property string $playIcon
 *    『播放按钮』的『可播放状态』的图形。
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property string $stopIcon
 *    『播放按钮』的『可停止状态』的图形。
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property string $prevIcon
 *    『后退按钮』的图形
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property string $nextIcon
 *    『前进按钮』的图形
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property string $color Default: '#304654'
 *    按钮颜色。
 *
 * @property string $borderColor Default: '#304654'
 *    按钮边框颜色。
 *
 * @property ControlStyle\BorderWidth $borderWidth Default: 1
 *    按钮边框线宽。
 *
 * {_more_}
 */
class ControlStyle extends Property {}