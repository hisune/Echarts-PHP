<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Geo
{            
        
    /**
     * @var boolean Whether to show the geo component.
     */
    public $show = true;        
        
    /**
     * @var string Map charts.
     * Due to the increase of fineness of map, ECharts 3 doesnt include map data by default for package size consideration. You may find map files you need on map download page and then include and register them in ECharts.
     * Two formats of map data are provided in ECharts, one of which can be included in &lt;script&gt; tag as JavaScript file, and the other of is in JSON format and should be loaded using AJAX. Map name and data will be loaded automatically once the JavaScript file is loaded, while in the JSON form, you have to assign name explicitly.
     * Here are examples of these two types:
     *  JavaScript importing example 
     * &lt;script src=echarts.js&gt;&lt;/script&gt;
     * &lt;script src=map/js/china.js&gt;&lt;/script&gt;
     * &lt;script&gt;
     * var chart = echarts.init(document.getElmentById(main));
     * chart.setOption({
     *     series: [{
     *         type: map,
     *         map: china
     *     }]
     * });
     * &lt;/script&gt;
     * 
     *  JSON importing example 
     * $.get(map/json/china.json, function (chinaJson) {
     *     echarts.registerMap(china, chinaJson);
     *     var chart = echarts.init(document.getElmentById(main));
     *     chart.setOption({
     *         series: [{
     *             type: map,
     *             map: china
     *         }]
     *     });
     * });
     * 
     * ECharts uses geoJSON format as map outline. Besides the methods introduced above, you can also get geoJSON data through in other methods if you like and register it in ECharts. Reference to USA Population Estimates for more information.
     */
    public $map = '';        
        
    /**
     * @var boolean Whether to enable mouse zooming and translating. false by default. If either zooming or translating is wanted, it can be set to scale or move. Otherwise, set it to be true to enable both.
     */
    public $roam = false;        
        
    /**
     * @var array Center of current view-port, in longitude and latitude.
     * Example:
     * center: [115.97, 29.71]
     */
    public $center;        
        
    /**
     * @var int Used to scale aspect of geo.
     * The final aspect is calculated by: geoBoundingRect.width / geoBoundingRect.height * aspectScale.
     */
    public $aspectScale = 0.75;        
        
    /**
     * @var array Two dimension array. Define coord of left-top, right-bottom in layout box.
     * // A complete world map
     * map: world,
     * left: 0, top: 0, right: 0, bottom: 0,
     * boundingCoords: [
     *     // [lng, lat] of left-top corner
     *     [-180, 90],
     *     // [lng, lat] of right-bottom corner
     *     [180, -90]
     * ],
     */
    public $boundingCoords;        
        
    /**
     * @var int Zoom rate of current view-port.
     */
    public $zoom = 1;        
        
    /**
     * @var Geo\ScaleLimit Limit of scaling, with min and max. 1 by default.
     */
    public $scaleLimit;        
        
    /**
     * @var array Name mapping for customized areas. For example:
     * {
     *     China : 中国
     * }
     */
    public $nameMap;        
        
    /**
     * @var boolean|string Selected mode decides whether multiple selecting is supported. By default, false is used for disabling selection. Its value can also be single for selecting single area, or multiple for selecting multiple areas.
     */
    public $selectedMode = false;        
        
    /**
     * @var Geo\Label Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle.normal in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has two status normal and emphasis as itemStyle does.
     */
    public $label;        
        
    /**
     * @var Geo\ItemStyle Graphic style of Map Area Border, which has normal and emphasis two styles. normal is the style by default, while emphasis is the style when it is highlighted, like being hovered by mouse, or highlighted via legend connect.
     */
    public $itemStyle;        
        
    /**
     * @var int zlevel value of all graghical elements in .
     * zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a seperate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
     * Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
     */
    public $zlevel = 0;        
        
    /**
     * @var int z value of all graghical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
     * z has a lower priority to zlevel, and will not create new Canvas.
     */
    public $z = 2;        
        
    /**
     * @var string|int Distance between  component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = 'auto';        
        
    /**
     * @var string|int Distance between  component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 'auto';        
        
    /**
     * @var string|int Distance between  component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between  component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var array layoutCenter and layoutSize provides layout strategy other than left/right/top/bottom/width/height.
     * When using left/right/top/bottom/width/height, it is hard to put the map inside a box area with a fixed width-height ratio. In this case, layoutCenter attribute can be used to define the center position of map, and layoutSize can be used to define the size of map. For example:
     * layoutCenter: [30%, 30%],
     * // If width-height ratio is larger than 1, then width is set to be 100.
     * // Otherwise, height is set to be 100.
     * // This makes sure that it will not exceed the area of 100x100
     * layoutSize: 100
     * 
     * After setting these two values, left/right/top/bottom/width/height becomes invalid.
     */
    public $layoutCenter;        
        
    /**
     * @var int|string Size of map, see layoutCenter for more information. Percentage relative to screen width, and absolute pixel values are supported.
     */
    public $layoutSize;        
        
    /**
     * @var array Configure style for specified regions.
     * For example:
     * regions: [{
     *     name: Guangdong,
     *     itemStyle: {
     *         normal: {
     *             areaColor: red,
     *             color: red
     *         }
     *     }
     * }]
     * 
     * The region color can also be controlled by map series. See series-map.geoIndex.
     */
    public $regions;        
        
    /**
     * @var boolean Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
     */
    public $silent = false;

}