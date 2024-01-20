<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Radiation */

$this->title = 'Create Radiation';
$this->params['breadcrumbs'][] = ['label' => 'Radiations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radiation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
