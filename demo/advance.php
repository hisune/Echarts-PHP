<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 18:26
 */
use Hisune\EchartsPHP\ECharts;

$chart = new ECharts();
$chart->tooltip->trigger = 'axis';
$chart->legend->data = array('蒸发量','降水量','最低气温','最高气温');
$chart->toolbox = array(
    'show' => true,
    'feature' => array(
        'mark' => array('show' => true),
        'dataView' => array('show' => true),
        'magicType' => array('show' => true, 'type' => array('line', 'bar')),
        'restore' => array('show' => true),
        'saveAsImage' => array('show' => true),
    )
);
$chart->xAxis = array(
    array(
        'type' => 'category',
        'position' => 'bottom',
        'boundaryGap' => true,
        'axisLine' => array(
            'show' => true,
            'lineStyle' => array(
                'color' => 'green',
                'type' => 'solid',
                'width' => 2,
            ),
        ),
        'axisTick' => array(
            'show' => true,
            'length' => 10,
            'lineStyle' => array(
                'color' => 'red',
                'type' => 'solid',
                'width' => 2,
            ),
        ),
        'axisLabel' => array(
            'show' => true,
            'interval' => 'auto',
            'rotate' => 45,
            'margin' => 8,
            'formatter' => '{value}月',
            'textStyle' => array(
                'color' => 'blue',
                'fontFamily' => 'sans-serif',
                'fontSize' => 15,
                'fontStyle' => 'italic',
                'fontWeight' => 'bold',
            ),
        ),
        'splitLine' => array(
            'show' => true,
            'lineStyle' => array(
                'color' => '#483d8b',
                'type' => 'dashed',
                'width' => 1,
            ),
        ),
        'splitArea' => array(
            'show' => true,
            'areaStyle' => array(
                'color' => array('rgba(144,238,144,0.3)','rgba(135,200,250,0.3)')
            ),
        ),
        'data' => array(
            '1','2','3','4','5',
            array(
                'value' => '6',
                'textStyle' => array(
                    'color' => 'red',
                    'fontSize' => 30,
                    'fontStyle' => 'normal',
                    'fontWeight' => 'bold',
                ),
            ),
            '7','8','9','10','11','12'
        )
    ),
    array(
        'type' => 'category',
        'data' => array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'),
    ),
);
$chart->yAxis = array(
    array(
        'type' => 'value',
        'position' => 'left',
        'boundaryGap' => array(0,0.1),
        'axisLine' => array(
            'show' => true,
            'lineStyle' => array(
                'color' => 'red',
                'type' => 'dashed',
                'width' => 2,
            ),
        ),
        'axisTick' => array(
            'show' => true,
            'length' => 10,
            'lineStyle' => array(
                'color' => 'green',
                'type' => 'solid',
                'width' => 2,
            ),
        ),
        'axisLabel' => array(
            'show' => true,
            'interval' => 'auto',
            'rotate' => -45,
            'margin' => 18,
            'formatter' => '{value} ml',
            'textStyle' => array(
                'color' => '#1e90ff',
                'fontFamily' => 'verdana',
                'fontSize' => 10,
                'fontStyle' => 'normal',
                'fontWeight' => 'bold',
            ),
        ),
        'splitLine' => array(
            'show' => true,
            'lineStyle' => array(
                'color' => '#483d8b',
                'type' => 'dotted',
                'width' => 2,
            ),
        ),
        'splitArea' => array(
            'show' => true,
            'areaStyle' => array(
                'color' => array('rgba(205,92,92,0.3)','rgba(255,215,0,0.3)')
            ),
        ),
    ),
    array(
        'type' => 'value',
        'splitNumber' => 10,
        'axisLabel' => array(
            'formatter' => "
                function (value)
                {
                    return value + ' °C'
                }
            ",
        ),
        'splitLine' => array(
            'show' => true,
        )
    ),
);
$chart->series = array(
    array(
        'name' => '蒸发量',
        'type' => 'bar',
        'data' => array(2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3),
    ),
    array(
        'name' => '降水量',
        'type' => 'bar',
        'data' => array(2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3)
    ),
    array(
        'name' => '最低气温',
        'type' => 'line',
        'yAxisIndex' => 1,
        'data' => array(2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2)
    ),
    array(
        'name' => '最高气温',
        'type' => 'line',
        'yAxisIndex' => 1,
        'data' => array(12.0, 12.2, 13.3, 14.5, 16.3, 18.2, 28.3, 33.4, 31.0, 24.5, 18.0, 16.2)
    ),
);

echo $chart->render('advance-custom-id');