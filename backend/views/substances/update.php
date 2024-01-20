<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Substances */

$this->title = 'Update Substances: ' . $model->Sid;
$this->params['breadcrumbs'][] = ['label' => 'Substances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sid, 'url' => ['view', 'id' => $model->Sid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="substances-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
