<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Background */

$this->title = 'Update Background: ' . $model->Bid;
$this->params['breadcrumbs'][] = ['label' => 'Backgrounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bid, 'url' => ['view', 'id' => $model->Bid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="background-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
