<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120
 * 辐射值图表
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '辐射值图表';
$this->params['breadcrumbs'][] = $this->title;
?>

<h2 data-text="DATA" class="damage-title">DATA</h2>
<div id="damage-container" class="damage-container"></div>
<script src="https://cdn.bootcss.com/echarts/3.5.4/echarts.js"></script>
<!-- 为ECharts准备一个具备大小（宽高）的Dom --> 
<script>
 var dates = [], dmgTank = [71,72,75],dmgUAV=[94,106,109],dmgCar=[66,76,74];
// 初始化 图表对象
var mychart = echarts.init(document.getElementById("damage-container"));
// 进行相关项的设置，也就是所谓的搭搭骨架，方便待会的ajax异步的数据填充
var option = {
    title : {
        text : '近期我国沿海辐射统计',
        textStyle:{
            color:"#B4B4B4",
            fontSize:'30'
        },
        left:'center',
        top:0,
    },
    tooltip : {
        show : true
    },
    legend : {
        data : [ '天津监测站','广东监测站','上海监测站' ],
        textStyle:{
            color:"#B4B4B4",
            fontSize:'15'
        },
        top:36,
    },
    xAxis : [ {
        data : ['2023.9.13','2023.10.16','2023.12.10'],
        name:'日期',
        nameTextStyle:{
            fontFamily:'微软雅黑',
            color:"#fff",
            fontSize:'25'
        },
        nameGap:35,
        nameLocation:"middle",
        axisLabel:{
            textStyle:{
                show:true,
                fontFamily:'微软雅黑',
                color:"#fff",
                fontSize:'25'
            }
        },
        axisLine:{
            lineStyle:{
                color:'#fff',
            }
        },
        padding:[]
    } ],
    yAxis : [ {
        type : 'value',
        name:'单日辐射值，单位nGy/h',
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
        }
    }],
    series : [ {
        "name" : "天津监测站",
        type : 'bar',
        "data" : this.dmgTank,
        barWidth:'15%',
    } ,{
        "name" : "广东监测站",
        type : 'bar',
        "data" : this.dmgUAV,
        barWidth:'15%'
    } ,{
        "name" : "上海监测站",
        type : 'bar',
        "data" : this.dmgCar,
        barWidth:'15%'
    }  ]
};
// 将配置项赋给chart对象，来显示相关的数据
mychart.setOption(option);
</script>
