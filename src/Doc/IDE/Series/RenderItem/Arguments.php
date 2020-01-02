<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\RenderItem;

use Hisune\EchartsPHP\Property;

/**
 * @property array $params
 *    The first parameter of renderItem, including:
 *     {
 *         context: // {string} An object that developers can store something temporarily here. Life cycle: current round of rendering.
 *         seriesId: // {string} The id of this series.
 *         seriesName: // {string} The name of this series.
 *         seriesIndex: // {number} The index of this series.
 *         dataIndex: // {number} The index of this data item.
 *         dataIndexInside: // {number} The index of this data item in the current data window (see dataZoom).
 *         dataInsideLength: // {number} The count of data in the current data window (see dataZoom).
 *         actionType: // {string} The type of action that trigger this render.
 *         coordSys: // coordSys is variable by different types of coordinate systems:
 *         coordSys: {
 *             type: cartesian2d,
 *             x: // {number} x of grid rect
 *             y: // {number} y of grid rect
 *             width: // {number} width of grid rect
 *             height: // {number} height of grid rect
 *         },
 *         coordSys: {
 *             type: calendar,
 *             x: // {number} x of calendar rect
 *             y: // {number} y of calendar rect
 *             width: // {number} width of calendar rect
 *             height: // {number} height of calendar rect
 *             cellWidth: // {number} calendar cellWidth
 *             cellHeight: // {number} calendar cellHeight
 *             rangeInfo: {
 *                 start: // date start of calendar.
 *                 end: // date end of calendar.
 *                 weeks: // number of weeks in calendar.
 *                 dayCount: // day count in calendar.
 *             }
 *         },
 *         coordSys: {
 *             type: geo,
 *             x: // {number} x of geo rect
 *             y: // {number} y of geo rect
 *             width: // {number} width of geo rect
 *             height: // {number} height of geo rect
 *             zoom: // {number} zoom ratio, 1 if no zoom, 0.5 means shrink to 50%.
 *         },
 *         coordSys: {
 *             type: polar,
 *             cx: // {number} x of polar center.
 *             cy: // {number} y of polar center.
 *             r: // {number} outer radius of polar.
 *             r0: // {number} inner radius of polar.
 *         },
 *         coordSys: {
 *             type: singleAxis,
 *             x: // {number} x of singleAxis rect
 *             y: // {number} y of singleAxis rect
 *             width: // {number} width of singleAxis rect
 *             height: // {number} height of singleAxis rect
 *         }
 *     }
 *     
 *     Difference between dataIndex and dataIndexInside:
 *     
 *     dataIndex is the index of a dataItem in the original data.
 *     dataIndexInside is the index of a dataItem in the current data window (see dataZoom.
 *     
 *     renderItem.arguments.api uses dataIndexInside as the input parameter but not dataIndex, because conversion from dataIndex to dataIndexInside is time-consuming.
 *
 * @property Arguments\Api $api
 *    The second parameter of renderItem.
 *
 * {_more_}
 */
class Arguments extends Property {}