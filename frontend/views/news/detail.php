<?php
/**
 * Team: NKUSaveSea
 * Coding by 张丽婷 2111190, 2023/12/19
 * 新闻详情页
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
    <div class="news-detail-title"><?= Html::encode("{$news[0]->Ntitle}") ?></div>  
    <div class="news-detail-info">  
        <span class="news-detail-author"><?= Html::encode("{$news[0]->Nauthor}") ?></span>  
        <span class="news-detail-date"><?= Html::encode("{$news[0]->Ndate}") ?></span>  
    </div>  
    <div class="news-detail-line">详情</div>  
    <div class="news-detail-content"><?= Html::encode("{$news[0]->Ncontent}") ?></div>  
    <a href="?r=news" class="news-retbtn">return news</a>  <!--返回news界面按钮-->
</div>
