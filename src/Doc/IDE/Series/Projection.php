<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property callable $project
 *    (coord: [number, number]) =&gt; [number, number]
 *     
 *     Projection of latitude and longitude coordinates to other coordinates.
 *
 * @property callable $unproject
 *    (point: [number, number]) =&gt; [number, number]
 *     
 *     Calculate the raw latitude and longitude coordinates from the projected coordinates
 *
 * @property callable $stream
 *    This property is mainly used to adapt the stream interface used in d3-geo. After introducing stream, you can introduce both the Antimeridian Clipping and Adaptive Sampling algorithms implemented in d3-geo.
 *     const projection = d3.geoProjection((x, y) =&gt; ([x, y / 0.75]))
 *         .rotate([-115, 0]);
 *     // ...
 *     series: {
 *         type: map,
 *         projection: {
 *             // We still need project and unproject when stream is provided.
 *             project: (point) =&gt; projection(point),
 *             unproject: (point) =&gt; projection.invert(point),
 *             // We can directly use the stream method in d3 projection.
 *             stream: projection.stream
 *         }
 *     }
 *     
 *     Note: stream is not required in the projection.
 *
 * {_more_}
 */
class Projection extends Property {}