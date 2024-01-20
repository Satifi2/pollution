<?php
/**
 * Team: NKUsavesea
 * Coding by 叶潇晗 
 * 排放折线图
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '排放';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 data-text="EMISSION" class="victim-title">EMISSION</h2>
<div id="victim-container" class="victim-container"></div>
    <!-- 引入 echarts.js -->
    <script src="https://cdn.bootcss.com/echarts/3.5.4/echarts.js"></script>

    <script>
    var mychart = echarts.init(document.getElementById("victim-container"));

    option = {
  xAxis: {
    type: 'category',
    data: ['2023.08.24', '2023.10.5', '2023.11.2', '2023.12.14', '2024年'],
    axisLine: {
    lineStyle: {
      color: 'white'  // 设置横坐标轴线的颜色
    }
  }
  },
  yAxis:[ {
    type: 'value',
    name:'排放吨数',
    nameTextStyle:{
        show:true,
            fontFamily:'微软雅黑',
            color:"#fff",
            fontSize:'25'
    },
    axisLabel:{
        textStyle:{
            show:true,
            fontFamily:'微软雅黑',
            color:"#fff",
            fontSize:'25'
        }
    },
    axisLine: {
        lineStyle: {
           color: 'white'  
        }
   }
  }],
  series: [
    {
      data: [7788,7810,7753,7800,15000],
      type: 'line',
      lineStyle: {
      color: 'red',
      width: 500
    }
    }
  ]
};
    mychart.setOption(option);
</script>

