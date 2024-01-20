<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120 20231220
 * 友情链接
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<h2 data-text="LINK" class="event-title">LINK</h2>
</div>

<div class="news-content">    
<div class="news-detail-title"><?= Html::encode(" {$links[0]->Lname}") ?></div>
<div class="news-detail-info">
    <span class="news-detail-author"><?= Html::encode(" {$links[0]->Lherf}") ?></span>
</div>
<div class="news-detail-line">链接内容</div>
<div class="news-detail-content"><?= Html::encode(" {$links[0]->Lintro}") ?></div>
<a href="/yii2/frontend/web/index.php" class="news-retbtn">return home</a>
</div>
