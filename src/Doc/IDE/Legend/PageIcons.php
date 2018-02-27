<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Legend;

use Hisune\EchartsPHP\Property;

/**
 * @property array $horizontal
 *    legend.orient 为 horizontal 时的翻页按钮图标。
 *     是一个数组，表示 [previous page button, next page button]。默认值为 [M0,0L12,-10L12,10z, M0,0L-12,-10L-12,10z]，。
 *     数组中每项，
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property array $vertical
 *    legend.orient 为 vertical 时的翻页按钮图标。
 *     是一个数组，表示 [previous page button, next page button]。默认值为 [M0,0L20,0L10,-20z, M0,0L20,0L10,20z]，。
 *     数组中每项，
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * {_more_}
 */
class PageIcons extends Property {}