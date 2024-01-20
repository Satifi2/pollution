<?php
/**
 * Team: NKUSaveSea
 * Coding by 张丽婷 2111190, 2023/12/19
 * 新闻背景介绍页
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--空白行样式-->
<style>  
    .news-retbtn {  
        margin-bottom: 20px; /* 设置间距 */  
    }  
</style>

<div>  
    <h2 data-text="NEWS" class="news-title">NEWS</h2>  
</div>  
<div class="news-content">      
    <div class="news-detail-title"><?= Html::encode("{$background[0]->Bname}") ?></div>  
    <div class="news-detail-info">  
        <span class="news-detail-author"><?= Html::encode("{$background[0]->Ber}") ?></span>  
        <span class="news-detail-date"><?= Html::encode("{$background[0]->Btime}") ?></span>  
    </div>  
    <div class="news-detail-line">背景介绍</div>  
    <div class="news-detail-content"><?= Html::encode("{$background[0]->Bintro}") ?></div>  
    <a href="?r=news" class="news-retbtn">return news</a>  <!--返回news界面按钮-->
</div>