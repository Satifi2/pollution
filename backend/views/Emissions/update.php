<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emissions */

$this->title = 'Update Emissions: ' . $model->Oid;
$this->params['breadcrumbs'][] = ['label' => 'Emissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Oid, 'url' => ['view', 'id' => $model->Oid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emissions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
