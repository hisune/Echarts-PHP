<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 18:24
 */
header('Content-Type: text/html; charset=utf-8');
require('../vendor/autoload.php');
use Hisune\EchartsPHP\ECharts;
use Hisune\EchartsPHP\Doc\IDE\YAxis;

$chart = new ECharts();
$chart->tooltip->show = true;
$chart->legend->data[] = '销量';
$chart->xAxis[] = array(
    'type' => 'category',
    'data' => array("衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子")
);

$yAxis = new YAxis();
$yAxis->type = 'value';
$chart->addYAxis($yAxis);

$chart->series[] = array(
    'name' => '销量',
    'type' => 'bar',
    'data' => array(5, 20, 40, 10, 10, 20)
);
echo $chart->render('simple-custom-id');