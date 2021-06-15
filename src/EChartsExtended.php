<?php

namespace Hisune\EchartsPHP;

use Exception;

class EChartsExtended extends ECharts{
	const SCRIPT_EXTRAS = 'extra_scripts';
	const SCRIPT_PRE_LOAD = "pre_load_scripts";
	const SCRIPT_POST_LOAD = "post_load_scripts";

	public $initOptions;

	protected $isJsNameAlreadyUsed = false;

	/* relocated from Config */
	public static $method = array();
	protected static $scripts = [];

	public $scriptSets = array();

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
	 * @throws Exception
	 */
	public function __construct($dist = '', $jsSuffix = null)
	{
		parent::__construct($dist, $jsSuffix);
		$this->setDist($dist);
		$this->initOptions = new InitOptions();
		$this->setJsVar($jsSuffix);
	}

	static function scriptClass()
	{
		return "echarts_php";
	}

	public function __clone()
	{
		$this->initOptions = clone $this->initOptions;
	}

	public function preRender($id, $attribute = null, $theme = null)
	{
		$initOptions = $this->initOptions;

		$option = $this->getOption();

		$attribute = $attribute?:array();

		if(
			!$attribute["style"] ||
			(is_array($attribute["style"]) && !key_exists("height", $attribute["style"])) ||
			(is_string($attribute["style"]) && strpos($attribute["style"], "height:") === false)
		)
		{
			if($attribute["style"] && !is_array($attribute["style"]))
			{
				$attribute["style"] = array($attribute["style"]);
			}

			if(!$this->initOptions->height)
			{
				$attribute["style"]["height"] = "400px";
			}
		}

		$attribute = self::_renderAttribute($attribute);

		$theme = Config::jsonEncode($theme);

		$this->addExtraScript(<<<ECHART_PLACEHOLDER
//<script>
if (! window['addEChartPlaceholder'])
{
	window['addEChartPlaceholder'] = function(id, attributes){
		if (!Array.isArray) {
		  Array.isArray = function(arg) {
		    return Object.prototype.toString.call(arg) === '[object Array]';
		  };
		}
		
		var existing = document.getElementById(id);
		
		if (existing)
		{
			existing.parentNode.removeChild(existing);
		}
		
		var scripts = document.getElementsByTagName( 'script' );
		var me = scripts[ scripts.length - 1];
		var parent = me.parentNode;
		var node = document.createElement("div");
		
		node.id = id;
		
		if (
			typeof attributes === typeof undefined ||
			typeof attributes !== typeof {}
		)
		{
			attributes = {};
		}
		
		for(var i in attributes)
		{
			if (attributes.hasOwnProperty(i))
			{
				node.setAttribute(i, attributes[i]);
			}
		}
		
		parent.insertBefore(node, me);
	}
}

ECHART_PLACEHOLDER
			, true);

		$this->addScript(
			"init",
			'echarts'.($this->getDistType(true)).($this->isMinify()? '.min':'').'.js',
			$this->getDist()
		);

		$js = $this->renderScripts("init");
		$js .= $this->renderScripts();

		$jsVar = $this->getJsVar();
		$optionVar = $this->getOptionVar();
		$option = Config::jsonEncode($option);
		$initOptions = Config::jsonEncode($initOptions);

		$eventsHtml = $this->renderEvents();

		$preLoadJS = $this->renderScripts(static::SCRIPT_PRE_LOAD, false);
		$postLoadJs = $this->renderScripts(static::SCRIPT_POST_LOAD, false);

		$loader = <<<HTML
var {$jsVar} = echarts.init(document.getElementById('{$id}'), {$theme}, {$initOptions});
var {$optionVar} = {$option};
$eventsHtml
$preLoadJS
{$jsVar}.setOption({$optionVar});
$postLoadJs
HTML;

		$result = array(
			"scripts" => $js,
			"loader" => $loader,
		);

		$result["placeholderLoader"] = <<<PL_LOADER
window['addEChartPlaceholder']('$id', {$attribute});
PL_LOADER;

		return $result;
	}

	/**
	 * @param string|array $id - if $id is an array with ('scripts', 'placeholder', 'loader') as keys, preRender() will not happen and $id is used as $preRender
	 *                         - this allows manipulation and extra preparation of `preRender()` result.
	 * @param null         $attribute
	 * @param null         $theme
	 *
	 * @return string
	 */
	public function render($id, $attribute = null, $theme = null)
	{
		$preRender = null;

		if(is_array($id))
		{
			if(isset($id["scripts"]) && isset($id["placeholderLoader"]) && isset($id["loader"]))
			{
				$preRender = $id;
			}
		}
		else
		{
			$id = (string)$id;
		}

		if(!$preRender)
		{
			$preRender = $this->preRender($id, $attribute, $theme);
		}

		$scripts = $preRender["scripts"];
		$placeholderLoader = $preRender["placeholderLoader"];
		$loader = $preRender["loader"];

		return <<<HTML
{$scripts}
<script type="text/javascript" class="echarts">
{$placeholderLoader}
{$loader}
</script>
HTML;
	}

	public function getOption($render = null, $jsObject = false)
	{
		$options = [];
		is_null($render) && $render = $this->_options;

		if(is_array($render))
		{
			foreach($render as $k => $v)
			{
				if(is_array($v))
				{
					$options[$k] = $this->getOption($v);
				}
				elseif($v instanceof Property)
				{
					$options[$k] = $v->_options;
					if(is_array($options[$k]))
					{
						$options[$k] = $this->getOption($options[$k]);
					}
				}
				else
				{
					$options[$k] = $v;
				}
			}
		}
		else
		{
			$options = $render;
		}

		Config::optionMethod($options);

		return $jsObject? Config::jsonEncode($options):$options;
	}

	public function on($event, $callback)
	{
		$this->addEvent($event, $callback);
	}

	public function addEvent($event, $callback)
	{
		$this->_events[$event][] = $callback;
	}

	public static function jsExpr($string)
	{
		return Config::jsExpr($string);
	}

	/**
	 * @param                  $file
	 * @param null|string|bool $distOrIsContent - possible values:
	 *                                          null|empty string - determine $dist automatically based on provided $this->getDist()
	 *                                          false - don't use $dist; provided $file is a valid URL
	 *                                          true - $file is not a location, but rather the contents to be written inside <script> tags
	 *                                          string - (non-empty) use given $dist as $dist
	 */
	public function addExtraScript($file, $distOrIsContent = null)
	{
		$this->addScript(static::SCRIPT_EXTRAS, $file, $distOrIsContent);
	}

	public function addPreLoadScript($file, $distOrIsContent = null)
	{
		$this->addScript(static::SCRIPT_PRE_LOAD, $file, $distOrIsContent);
	}

	public function addScript($type, $file, $distOrIsContent = null)
	{
		!$distOrIsContent && $distOrIsContent !== false && $distOrIsContent = $this->getDist();

		if(is_string($distOrIsContent))
		{
			$file = $distOrIsContent.$file;
			$distOrIsContent = false;
		}

		$md5 = md5($file);

		$base = &$this->getScriptSet($type);

		if(!isset($base[$md5]))
		{
			$base[$md5] = array(
				"script" => $file,
				"type_or_dist" => $distOrIsContent,
			);
		}
	}

	/**
	 * @param      $src
	 * @param bool $isContent
	 * @param bool $as_html_tag - default = true - only effective if $isContent == true
	 *
	 * @return string
	 */
	private static function _renderScript($src, $isContent = false, $as_html_tag = true)
	{
		$js = '';
		$content = null;
		$md5 = md5($src);
		if(!isset(self::$scripts[$md5]))
		{
			self::$scripts[$md5] = true;

			if(!$isContent)
			{
				$src = "src=\"{$src}\"";
			}
			else
			{
				$content = $src;
				$src = '';
			}

			$class = self::scriptClass();

			if(!$isContent || $as_html_tag)
			{
				$js = "<script type=\"text/javascript\" class=\"{$class}\" {$src}>{$content}</script>";
			}
			else
			{
				$js = $content;
			}
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
		$rendered = array();

		foreach($attribute as $k => $v)
		{
			if(is_array($v))
			{
				$temp = array();
				foreach($v as $vK => $vV)
				{
					if(!is_numeric($vK))
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
			$rendered[$k] = $v;
		}

		return json_encode($rendered);
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
	 * @throws Exception
	 */
	public function setJsVar($jsSuffix = null)
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

	public function getJsVar($full = false)
	{
		$this->isJsNameAlreadyUsed = true;
		return $this->jsVar;
	}

	public function getOptionVar()
	{
		$var_name = $this->getJsVar();
		return $var_name.'_option';
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
	 * @throws Exception
	 */
	private function throwPreRenderedException()
	{
		throw new Exception('$jsVar is already defined. In order to prevent incompatibilities with already printed scripts, it is not allowed to change $prefix or $jsVar after preRender phase.');
	}

	function renderScripts($scriptSet = self::SCRIPT_EXTRAS, $as_html_tag = true)
	{
		$scriptSet = $this->getScriptSet($scriptSet);

		$js = '';
		if($this->getRenderScript())
		{
			if($scriptSet)
			{
				foreach($scriptSet as $script)
				{
					$isContent = false;
					$src = null;
					if($script["type_or_dist"] === true)
					{
						$isContent = true;
						$src = $script["script"];
					}
					else
					{
						$src = '';

						if($script["type_or_dist"])
						{
							$src .= "{$script["type_or_dist"]}/";
						}

						$src .= $script["script"];
					}
					$js .= self::_renderScript($src, $isContent, $as_html_tag);
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
				if(is_array($call))
				{
					$call = implode("\n", $call);
				}
				$eventsHtml .= "{$this->getJsVar()}.on('{$event}', function (params) {
					$call
				});";
			}
		}

		return $eventsHtml;
	}

	public function &getScriptSet($type)
	{
		return $this->scriptSets[$type];
	}
}