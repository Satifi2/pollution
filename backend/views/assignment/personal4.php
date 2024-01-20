<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231223
* 作业页面设计
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '个人作业4-杜金轩';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="personal-section">
        <div class="personal-box-item">
            <h3>杜金轩</h3>
            <div class="personal-box-list" value="10">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                    <h2 class="personal-rank">
                        <small>#</small>1
                    </h2>
                    <h4>作业1</h4>
                    <p>前端初探</p>
                </div>
            </div>
            <div class="personal-box-list" value="11">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                <h2 class="personal-rank">
                        <small>#</small>2
                    </h2>
                    <h4>作业2</h4>
                    <p>页面设计</p>
                </div>
            </div>
            <div class="personal-box-list" value="12">
                <div class="personal-img-box">
                    <img src="../web/img/hw.png">
                </div>
                <div class="personal-box-content">
                <h2 class="personal-rank">
                        <small>#</small>3
                    </h2>
                    <h4>作业3</h4>
                    <p>框架建站</p>
                </div>
            </div>
        </div>
</div>



<script>
    $(".personal-box-list").click(function(){
        var value=$(this).attr('value');
        switch(value){
            case '1': $(location).attr('href', '../../data/personal/作业1(2112120_叶潇晗).zip');break;
            case '2': $(location).attr('href', '../../data/personal/作业2(2112120_叶潇晗).zip');break;
            case '3': $(location).attr('href', '../../data/personal/作业3(2112120_叶潇晗).zip');break;
            case '4': $(location).attr('href', '../../data/personal/作业1(2114042_林子淳).zip');break;
            case '5': $(location).attr('href', '../../data/personal/作业2(2114042_林子淳).zip');break;
            case '6': $(location).attr('href', '../../data/personal/作业3(2114042_林子淳).zip');break;
            case '7': $(location).attr('href', '../../data/personal/作业1(2111190_张丽婷).zip');break;
            case '8': $(location).attr('href', '../../data/personal/作业2(2111190_张丽婷).zip');break;
            case '9': $(location).attr('href', '../../data/personal/作业3(2111190_张丽婷).zip');break;
            case '10': $(location).attr('href', '../../data/personal/作业1(2111288_杜金轩).zip');break;
            case '11': $(location).attr('href', '../../data/personal/作业2(2111288_杜金轩).zip');break;
            case '12': $(location).attr('href', '../../data/personal/作业3(2111288_杜金轩).zip');break;
            default:break;
        }
    });
</script>