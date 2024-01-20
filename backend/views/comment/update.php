<?php
/**
 * Team: NKUSaveSea
 * Coding by 林子淳 2114042, 20231219
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */

$this->title = 'Update Comment: ' . $model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cid, 'url' => ['view', 'id' => $model->cid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
