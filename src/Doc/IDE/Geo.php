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
 * @property boolean $show Default: true
 *    Whether to show the geo component.
 *
 * @property string $map Default: ''
 *    Map charts.
 *     Due to the increase of fineness of map, ECharts 3 doesnt include map data by default for package size consideration. You may find map files you need on map download page and then include and register them in ECharts.
 *     Two formats of map data are provided in ECharts, one of which can be included in &lt;script&gt; tag as JavaScript file, and the other of is in JSON format and should be loaded using AJAX. Map name and data will be loaded automatically once the JavaScript file is loaded, while in the JSON form, you have to assign name explicitly.
 *     Here are examples of these two types:
 *      JavaScript importing example 
 *     &lt;script src=echarts.js&gt;&lt;/script&gt;
 *     &lt;script src=map/js/china.js&gt;&lt;/script&gt;
 *     &lt;script&gt;
 *     var chart = echarts.init(document.getElmentById(main));
 *     chart.setOption({
 *         series: [{
 *             type: map,
 *             map: china
 *         }]
 *     });
 *     &lt;/script&gt;
 *     
 *      JSON importing example 
 *     $.get(map/json/china.json, function (chinaJson) {
 *         echarts.registerMap(china, chinaJson);
 *         var chart = echarts.init(document.getElmentById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: china
 *             }]
 *         });
 *     });
 *     
 *     ECharts uses geoJSON format as map outline. Besides the methods introduced above, you can also get geoJSON data through in other methods if you like and register it in ECharts. Reference to USA Population Estimates for more information.
 *
 * @property boolean|string $roam Default: false
 *    Whether to enable mouse zooming and translating. false by default. If either zooming or translating is wanted, it can be set to scale or move. Otherwise, set it to be true to enable both.
 *
 * @property array $center
 *    Center of current view-port, in longitude and latitude.
 *     Example:
 *     center: [115.97, 29.71]
 *
 * @property int $aspectScale Default: 0.75
 *    Used to scale aspect of geo.
 *     The final aspect is calculated by: geoBoundingRect.width / geoBoundingRect.height * aspectScale.
 *
 * @property array $boundingCoords
 *    Two dimension array. Define coord of left-top, right-bottom in layout box.
 *     // A complete world map
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // [lng, lat] of left-top corner
 *         [-180, 90],
 *         // [lng, lat] of right-bottom corner
 *         [180, -90]
 *     ],
 *
 * @property int $zoom Default: 1
 *    Zoom rate of current view-port.
 *
 * @property Geo\ScaleLimit $scaleLimit
 *    Limit of scaling, with min and max. 1 by default.
 *
 * @property array $nameMap
 *    Name mapping for customized areas. For example:
 *     {
 *         China : 中国
 *     }
 *
 * @property boolean|string $selectedMode Default: false
 *    Selected mode decides whether multiple selecting is supported. By default, false is used for disabling selection. Its value can also be single for selecting single area, or multiple for selecting multiple areas.
 *
 * @property Geo\Label $label
 *    Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has emphasis as itemStyle does.
 *
 * @property Geo\ItemStyle $itemStyle
 *    Graphic style of Map Area Border, emphasis is the style when it is highlighted, like being hovered by mouse, or highlighted via legend connect.
 *
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in .
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 2
 *    z value of all graphical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * @property string|int $left Default: 'auto'
 *    Distance between  component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 'auto'
 *    Distance between  component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between  component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between  component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property array $layoutCenter
 *    layoutCenter and layoutSize provides layout strategy other than left/right/top/bottom/width/height.
 *     When using left/right/top/bottom/width/height, it is hard to put the map inside a box area with a fixed width-height ratio. In this case, layoutCenter attribute can be used to define the center position of map, and layoutSize can be used to define the size of map. For example:
 *     layoutCenter: [30%, 30%],
 *     // If width-height ratio is larger than 1, then width is set to be 100.
 *     // Otherwise, height is set to be 100.
 *     // This makes sure that it will not exceed the area of 100x100
 *     layoutSize: 100
 *     
 *     After setting these two values, left/right/top/bottom/width/height becomes invalid.
 *
 * @property int|string $layoutSize
 *    Size of map, see layoutCenter for more information. Percentage relative to screen width, and absolute pixel values are supported.
 *
 * @property array $regions
 *    Configure style for specified regions.
 *     For example:
 *     regions: [{
 *         name: Guangdong,
 *         itemStyle: {
 *             areaColor: red,
 *             color: red
 *         }
 *     }]
 *     
 *     The region color can also be controlled by map series. See series-map.geoIndex.
 *
 * @property boolean $silent Default: false
 *    Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
 *
 * {_more_}
 */
class Geo extends Property {}