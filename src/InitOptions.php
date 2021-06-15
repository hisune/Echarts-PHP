<?php
/**
 * Created by PhpStorm.
 * User: ada
 * Date: 21-Sep-18
 * Time: 11:00
 */

namespace Hisune\EchartsPHP;

class InitOptions{
	const RENDERER_CANVAS = 'canvas';
	const RENDERER_SVG = 'svg';

	public $devicePixelRatio = null;
	public $renderer = self::RENDERER_CANVAS;
	public $width = null;
	public $height = null;
}