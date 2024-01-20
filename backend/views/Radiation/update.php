<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Radiation */

$this->title = 'Update Radiation: ' . $model->Sid;
$this->params['breadcrumbs'][] = ['label' => 'Radiations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sid, 'url' => ['view', 'id' => $model->Sid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="radiation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
