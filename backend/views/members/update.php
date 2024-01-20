<?php
/**
 * Team: NKUSaveSea
 * Coding by 杜金轩 2111288, 20231220
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Members */

$this->title = 'Update Members: ' . $model->mid;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mid, 'url' => ['view', 'id' => $model->mid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
