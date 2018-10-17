<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 14:10
 */

namespace Hisune\EchartsPHP;

class Config
{
	public static $dist = '//cdn.bootcss.com/echarts/4.0.4';
	public static $version = '4.0.4';
	public static $renderScript = true;
	public static $distType = ''; // Empty is full, other options: simple, common
	public static $minify = true; // Whether or not load minify js file
}
