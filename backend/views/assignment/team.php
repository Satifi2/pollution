<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231223
* 作业页面设计
*/
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="team-section">
    <div class="team-box-item">
        <h3>团队作业</h3>

        <div class="team-box-father">
        <div class="team-box-list" value="1">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
                <h2 class="team-rank">
                    <small>#</small>1
                </h2>
                <h4>作业1</h4>
                <p>需求文档</p>
            </div>
        </div>
        <div class="team-box-list" value="2">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
            <h2 class="team-rank">
                    <small>#</small>2
                </h2>
                <h4>作业2</h4>
                <p>设计文档</p>
            </div>
        </div>
        <div class="team-box-list" value="3">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
            <h2 class="team-rank">
                    <small>#</small>3
                </h2>
                <h4>作业3</h4>
                <p>实现文档</p>
            </div>
        </div>


        <div class="team-box-list" value="4">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
                <h2 class="team-rank">
                    <small>#</small>4
                </h2>
                <h4>作业4</h4>
                <p>用户手册</p>
            </div>
        </div>
        <div class="team-box-list" value="5">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
            <h2 class="team-rank">
                    <small>#</small>5
                </h2>
                <h4>作业5</h4>
                <p>部署文档</p>
            </div>
        </div>
        <div class="team-box-list" value="6">
            <div class="team-img-box">
                <img src="../web/img/hw.png">
            </div>
            <div class="team-box-content">
            <h2 class="team-rank">
                    <small>#</small>6
                </h2>
                <h4>作业6</h4>
                <p>项目展示</p>
            </div>
        </div>
        </div>


    </div>
</div>



<script>
    $(".team-box-list").click(function(){
        var value=$(this).attr('value');
        switch(value){
            case '1': $(location).attr('href', '../../data/team/NKUSaveSea_需求文档(2112120-2111190-2114042-2111288).zip');break;
            case '2': $(location).attr('href', '../../data/team/NKUSaveSea_设计文档(2112120-2111190-2114042-2111288).zip');break;
            case '3': $(location).attr('href', '../../data/team/NKUSaveSea_实现文档(2112120-2111190-2114042-2111288).zip');break;
            case '4': $(location).attr('href', '../../data/team/NKUSaveSea_用户手册(2112120-2111190-2114042-2111288).zip');break;
            case '5': $(location).attr('href', '../../data/team/NKUSaveSea_部署文档(2112120-2111190-2114042-2111288).zip');break;
            case '6': $(location).attr('href', '../../data/team/NKUSaveSea_项目展示(2112120-2111190-2114042-2111288).zip');break;
            default:break;
        }
    });
</script>