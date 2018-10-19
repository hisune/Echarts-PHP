<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 14:01
 */

namespace Hisune\EchartsPHP;

/**
 * Class ECharts
 * Created by Hisune EchartsPHP AutoGenerate.
 *
 * @package Hisune\EchartsPHP
 *
 * @property  Doc\IDE\Title       $title
 * The title component, which contains the main title and subtitle.
 *
 * @property Doc\IDE\Legend       $legend
 * Legend component.
 *
 * @property Doc\IDE\Grid         $grid
 * Drawing grid in Cartesian coordinate system. Up to two X-axis and two Y-axis can be placed in a single grid. You can draw a line chart, a histogram, and a scatter chart (bubble chart) on the grid.
 *
 * @property Doc\IDE\XAxis        $xAxis
 * Cartesian coordinate system The x-axis in the grid. In general, a single grid component can only have up to two x-axises. More than two x-axes need to be configured to prevent overlap of multiple x-axes in the same position.
 *
 * @property Doc\IDE\YAxis        $yAxis
 * Cartesian coordinate system The y-axis in the grid. In general, a single grid component can only have up to two left and right y-axis. More than two y-axis need to be configured to prevent overlap of multiple Y-axes in the same position.
 *
 * @property Doc\IDE\Polar        $polar
 * Polar coordinate system, can be used for scatter plots and line graphs. Each polar coordinate system has an angular axis and a radius axis.
 *
 * @property Doc\IDE\RadiusAxis   $radiusAxis
 * Radial axis of the polar coordinate system.
 *
 * @property Doc\IDE\AngleAxis    $angleAxis
 * The angular axis of the polar coordinate system.
 *
 * @property Doc\IDE\Radar        $radar
 * Radar chart coordinate system component, only for radar chart. This component is equivalent to the polar component in ECharts 2. Because the polar in 3 is refactored to the standard polar component, to avoid confusion, the radar image uses the radar component as its coordinate system.
 *
 * @property Doc\IDE\DataZoom     $dataZoom
 * The dataZoom component is used for area scaling so that you can freely focus on the details of the data, or overview the data as a whole, or remove the effects of outliers.
 *
 * @property Doc\IDE\VisualMap    $visualMap
 * visualMap is a visual mapping component for visual coding, that is, mapping data to visual elements (visual channels).
 *
 * @property Doc\IDE\Tooltip      $tooltip
 * Prompt box component.
 *
 * @property Doc\IDE\AxisPointer  $axisPointer
 * This is the global common setting for the axis indicator (axisPointer).
 *
 * @property Doc\IDE\Toolbox      $toolbox
 * toolbar. Built-in export pictures, data view, dynamic type switching, data area scaling, reset five tools.
 *
 * @property Doc\IDE\Brush        $brush
 * brush is the area selection component, the user can select a part of the data in the figure, which is convenient for showing the selected data to the user, or some statistical calculation results of them.
 *
 * @property Doc\IDE\Geo          $geo
 * Geographic coordinate system components.
 *
 * @property Doc\IDE\Parallel     $parallel
 *
 *
 * @property Doc\IDE\ParallelAxis $parallelAxis
 * This component is the coordinate axis in the parallel coordinate system.
 *
 * @property Doc\IDE\SingleAxis   $singleAxis
 * Single axis. Can be applied to scatter plots to display one-dimensional data, as in the following example
 *
 * @property Doc\IDE\Timeline     $timeline
 * The timeline component provides the ability to switch, play, and more between multiple ECharts options.
 *
 * @property Doc\IDE\Graphic      $graphic
 * graphic is a native graphic element component. Graphic elements that can be supported include:
 *
 * @property Doc\IDE\Calendar     $calendar
 * Calendar coordinate system component.
 *
 * @property Doc\IDE\Dataset      $dataset
 * ECharts 4 began to support the dataset component for separate dataset declarations, so that data can be managed separately, reused by multiple components, and free to specify data to visual mapping. This can bring convenience in use in many scenarios.
 *
 * @property Doc\IDE\Aria         $aria
 * W3C has developed the Accessible Rich Internet Applications Suite (WAI-ARIA), which is dedicated to making web content and web applications accessible to more people with disabilities. ECharts 4.0 complies with this specification and supports automatic generation of descriptions based on chart configuration items, enabling blind people to understand the contents of the chart with the help of reading devices, so that the chart can be accessed by more people.
 *
 * @property Doc\IDE\Series       $series
 * Series list. Each series determines its own chart type by type
 *
 * @property callable             $color
 * Palette color list. If the series does not have a color set, it will cycle through the list to get the color as the series color.
 *
 * @property callable             $backgroundColor
 * Background color, no background by default.
 *
 * @property Doc\IDE\TextStyle    $textStyle
 * Global font style.
 *
 * @property callable             $animation
 * Whether to start the animation.
 *
 * @property callable             $animationThreshold
 * Whether to turn on the threshold of the animation, the animation will be turned off when the number of graphics displayed in a single series is greater than this threshold.
 *
 * @property callable             $animationDuration
 * The length of the initial animation, support callback function, can achieve a more dramatic initial animation effect by returning different delay time for each data:
 *
 * @property callable             $animationEasing
 * The easing effect of the initial animation. For different easing effects, refer to the easing example.
 *
 * @property callable             $animationDelay
 * The initial animation delay, support callback function, can achieve a more dramatic initial animation effect by returning different delay time for each data.
 *
 * @property callable             $animationDurationUpdate
 * The length of time the data is updated.
 *
 * @property callable             $animationEasingUpdate
 * The easing effect of the data update animation.
 *
 * @property callable             $animationDelayUpdate
 * Data update animation delay, support callback function, can achieve more dramatic update animation effect by returning different delay time for each data.
 *
 * @property callable             $progressive
 * The number of graphics is drawn per frame during progressive rendering. When set to 0, progressive rendering is not enabled, allowing separate configuration for each series.
 *
 * @property callable             $progressiveThreshold
 * Enables the graph number threshold for progressive rendering, enabling progressive rendering when the number of graphs in a single series exceeds this threshold.
 *
 * @property callable             $blendMode
 * Mixed mode of graphics, different blend modes can be found at https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/globalCompositeOperation .
 *
 * @property callable             $hoverLayerThreshold
 * The number of graph thresholds determines whether a separate hover layer is turned on, and a separate hover layer is turned on when the number of graphs for the entire graph is greater than the threshold.
 *
 * @property callable             $useUTC
 * Whether to use UTC time.
 *
 */
class ECharts extends Property{
	public $initOptions;

	protected $isJsNameAlreadyUsed = false;
	protected $jsVar;

	/* relocated from Config */
	public static $method = array();
	protected static $scripts = [];

	public $extraScript = array();
	protected $_events = [];

	/* Overrideable Parameters for Config */
	protected $dist = '';
	protected $version = null;
	protected $renderScript = null;
	protected $distType = null;
	protected $minify = null;

	/**
	 * @param      $dist string, dist of libraries
	 * @param null $jsSuffix
	 *
	 * @throws \Exception
	 */
	public function __construct($dist = '', $jsSuffix = null)
	{
		$this->setDist($dist);
		$this->initOptions = new InitOptions();
		$this->setJsVar($jsSuffix);
	}

	public function preRender($id, $attribute = null, $theme = null)
	{
		$initOptions = $this->initOptions;

		$option = $this->getOption();

		$attribute = $attribute?:array();

		if (
			!$attribute["style"] ||
			(is_array($attribute["style"] && !key_exists("height", $attribute["style"]))) ||
			(is_string($attribute["style"]) && strpos($attribute["style"], "height:") === false)
		)
		{
			if ($attribute["style"])
			{
				$attribute["style"][] = $attribute["style"];
			}
			if (!$this->initOptions->height)
			{
				$attribute["style"]["height"] = "400px";
			}
		}
		else
		{
			$this->initOptions->height = null;
		}
		$attribute = self::_renderAttribute($attribute);

		$theme = $this->jsonEncode($theme);

		$js = $this->renderScripts();

		$jsVar = $this->getJsVar();
		$option = $this->jsonEncode($option);
		$initOptions = $this->jsonEncode($initOptions);

		if(version_compare($this->getVersion(), '3.0.0') < 0)
		{
			$dist = $this->getDist();
			$require = self::_require($option);
			$loader = <<<HTML
var {$jsVar} = null;
require.config({
	paths: {
		echarts: '{$dist}'
	}
});
require(
	[
		{$require}
	],
	function (ec) {
		{$jsVar} = ec.init(document.getElementById('{$id}'), {$theme});
		var option = {$option};
		{$jsVar}.setOption(option);
	}
);
HTML;
		}
		else
		{
			$eventsHtml = $this->renderEvents();

			$loader = <<<HTML
var initOptions = {$initOptions};
var {$jsVar} = echarts.init(document.getElementById('{$id}'), {$theme}, initOptions);
{$jsVar}.setOption($option);
$eventsHtml
HTML;
		}

		return array(
			"scripts" => $js,
			"placeholder" => "<div id=\"{$id}\" {$attribute}></div>",
			"loader" => $loader,
		);
	}

	public function render($id, $attribute = null, $theme = null)
	{
		$preRender = $this->preRender($id, $attribute, $theme);

		$scripts = $preRender["scripts"];
		$placeholder = $preRender["placeholder"];
		$loader = $preRender["loader"];

		return <<<HTML
{$scripts}
{$placeholder}
<script type="text/javascript">
	{$loader}
</script>
HTML;
	}

	public function getOption($options = null, $asJson = false)
	{
		$_options = [];
		is_null($options) && $options = $this->_options;

		if(is_array($options))
		{
			foreach($options as $k => $v)
			{
				if(is_array($v))
				{
					$_options[$k] = $this->getOption($v);
				}
				elseif($v instanceof Property)
				{
					$_options[$k] = $v->_options;
					if(is_array($_options[$k]))
					{
						$_options[$k] = $this->getOption($_options[$k]);
					}
				}
				else
				{
					$_options[$k] = $v;
				}
			}
		}
		else
		{
			$_options = $options;
		}
		$_options = $this->optionMethod($_options);

		return $asJson? $this->jsonEncode($_options):$_options;
	}

	public function setOption(array $options = array())
	{
		foreach($options as $k => $v)
		{
			$this->offsetSet($k, $v);
		}
	}

	public function addEvent($event, $callback)
	{
		$this->_events[$event] = $callback;
	}

	public function addSeries(Doc\IDE\Series $series)
	{
		$this->series[] = $this->getOption($series->_options);
	}

	public function addXAxis(Doc\IDE\XAxis $xAxis)
	{
		$this->xAxis[] = $this->getOption($xAxis->_options);
	}

	public function addYAxis(Doc\IDE\YAxis $yAxis)
	{
		$this->yAxis[] = $this->getOption($yAxis->_options);
	}

	public static function jsExpr($string)
	{
		return self::_jsMethod($string);
	}

	private static function _jsMethod($value)
	{
		$md5 = '{%'.md5($value).'%}';
		static::$method['"'.$md5.'"'] = $value;
		return $md5;
	}

	// 替换js的function
	protected function optionMethod($option)
	{
		if(!($option instanceof Property))
		{
			foreach($option as $k => $v)
			{
				if(is_string($v))
				{
					$replace = str_replace(array("\t", "\r", "\n", "\0", "\x0B", ' '), '', $v);
					if(strpos($replace, 'function(') === 0)
					{
						$option[$k] = $this->_jsMethod($v);
					}
				}
				elseif(is_array($v))
				{
					$option[$k] = $this->optionMethod($option[$k]);
				}
				elseif($v instanceof Property)
				{
					$option[$k] = $this->optionMethod($v);
				}
			}
		}
		else
		{
			$option = $this->optionMethod($option->_options);
		}

		return $option;
	}

	// 替换回js的函数
	public function jsonEncode($option)
	{
		$option = json_encode($option);
		if(static::$method)
		{
			$option = str_replace(array_keys(static::$method), array_values(static::$method), $option);
		}
		return $option;
	}

	public function addExtraScript($file, $dist = null)
	{
		!$dist && $dist = $this->getDist();
		$this->extraScript[$file] = $dist;
	}

	private static function _renderScript($src)
	{
		$js = '';
		if(!isset(self::$scripts[$src]))
		{
			$js .= '<script type="text/javascript" src="'.$src.'"></script>';
			self::$scripts[$src] = true;
		}

		return $js;
	}

	private static function _require($option)
	{
		$requireString = "'echarts',";

		if(isset($option['series']))
		{
			foreach($option['series'] as $v)
			{
				if(isset($v['type']))
				{
					$requireString .= "'echarts/chart/".$v['type']."',";
				}
			}

			$requireString = rtrim($requireString, ',');
		}

		return $requireString;
	}

	private static function _renderAttribute(array $attribute = array())
	{
		$attributeString = '';

		foreach($attribute as $k => $v)
		{
			if (is_array($v))
			{
				$temp = array();
				foreach($v as $vK => $vV)
				{
					if (!is_numeric($vK))
					{
						$temp[] = "$vK:$vV";
					}
					else
					{
						$temp = $vK;
					}
				}

				$v = join(";", $temp);
			}

			$v = self::_h($v);
			$attributeString .= " $k=\"{$v}\"";
		}

		return $attributeString;
	}

	private static function _h($string)
	{
		return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
	}

	/**
	 * @return null
	 */
	public function getRenderScript()
	{
		return !is_null($this->renderScript)? $this->renderScript:Config::$renderScript;
	}

	/**
	 * @param null $renderScript
	 */
	public function setRenderScript($renderScript)
	{
		$this->renderScript = $renderScript;
	}

	/**
	 * @param null $jsSuffix
	 *
	 * @throws \Exception
	 */
	private function setJsVar($jsSuffix = null)
	{
		if(!$this->isJsNameAlreadyUsed)
		{
			if(!$jsSuffix || !is_string($jsSuffix))
			{
				$jsSuffix = 'chart_'.time().uniqid();
			}
			$this->jsVar = $jsSuffix;
		}
		else
		{
			$this->throwPreRenderedException();
		}
	}

	public function getJsVar()
	{
		$this->isJsNameAlreadyUsed = true;
		return $this->jsVar;
	}

	/**
	 * @return bool
	 */
	public function isMinify()
	{
		return !is_null($this->minify)? $this->minify:Config::$minify;
	}

	/**
	 * @param bool $minify
	 */
	public function setMinify($minify)
	{
		$this->minify = $minify;
	}

	/**
	 * @param string $dist
	 *
	 * @return $this
	 */
	public function setDist($dist = null)
	{
		$this->dist = $dist;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDist()
	{
		return !is_null($this->dist)? $this->dist:Config::$dist;
	}

	/**
	 * @param bool $withDot
	 *
	 * @return null
	 */
	public function getDistType($withDot = false)
	{
		$distType = !is_null($this->distType)? $this->distType:Config::$distType;
		return (($withDot && $distType)? '.':'').$distType;
	}

	/**
	 * @param null $distType
	 */
	public function setDistType($distType)
	{
		$this->distType = $distType;
	}

	/**
	 * @return null
	 */
	public function getVersion()
	{
		return !is_null($this->version)? $this->version:Config::$version;
	}

	/**
	 * @param null $version
	 */
	public function setVersion($version)
	{
		$this->version = $version;
	}

	/**
	 * @throws \Exception
	 */
	private function throwPreRenderedException()
	{
		throw new \Exception('$jsVar is already defined. In order to prevent incompatibilities with already printed scripts, it is not allowed to change $prefix or $jsVar after preRender phase.');
	}

	function renderScripts()
	{
		$js = '';
		if($this->getRenderScript())
		{
			$src = $this->getDist().'/echarts'.($this->getDistType(true)).($this->isMinify()? '.min':'').'.js';

			$js .= self::_renderScript($src);

			if($this->extraScript)
			{
				foreach($this->extraScript as $k => $v)
				{
					$src = $v.'/'.$k;
					$js .= self::_renderScript($src);
				}
			}
		}

		return $js;
	}

	public function renderEvents()
	{
		$eventsHtml = '';
		if($this->_events)
		{
			foreach($this->_events as $event => $call)
			{
				$eventsHtml .= "{$this->getJsVar()}.on(\'{$event}\', function (params) {{$call}});";
			}
		}

		return $eventsHtml;
	}
}
