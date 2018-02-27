<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2017/8/25
 * Time: 09:56
 */

require('../vendor/autoload.php');

use Hisune\EchartsPHP\Config;
use Hisune\EchartsPHP\ECharts;

if(isset($_GET['ajax']) && $_GET['ajax'] == 'true'):
    // Your data
    echo json_encode(['num' => rand(0,100), 'data' => uniqid()]);
else:
    // Your data
    $data = [];
    $xAxisData = [];
    for($i = 0; $i < 50; $i++){
        $data[] = rand(30,70);
        $xAxisData[] = uniqid();
    }

    $chart = new ECharts();
    $chart->xAxis = [
        'type' => 'category',
        'data' => $xAxisData,
    ];
    $chart->yAxis[] = [
        'type' => 'value',
    ];
    $chart->series[] = [
        'type' => 'line',
        'data' => $data
    ];
    Config::addExtraScript('jquery.min.js', '//cdn.bootcss.com/jquery/3.3.1');
    echo $chart->render('test-id');
?>
    <script>
        setInterval(function(){
            $.ajax({
                data: {
                    'ajax': true
                },
                dataType: 'json',
                success: function(json){
                    var echart = chart_<?=$chart->getJsVar()?>,
                        option = echart.getOption();

                    // shift a item then push a new
                    option.series[0].data.shift();
                    option.series[0].data.push(json.num);
                    option.xAxis[0].data.shift();
                    option.xAxis[0].data.push(json.data);
                    
                    echart.setOption({
                        series: option.series,
                        xAxis: option.xAxis
                    });
                }
            });
        }, 1000);
    </script>
<?php
endif;
