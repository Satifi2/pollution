<?php
/**
 * Team: NKUSaveSea
 * Coding by 林子淳 2114042, 20231219
 * CRUD
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Officer */

$this->title = 'Update Officer: ' . $model->oid;
$this->params['breadcrumbs'][] = ['label' => 'Officers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->oid, 'url' => ['view', 'id' => $model->oid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="officer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
