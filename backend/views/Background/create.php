<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Background */

$this->title = 'Create Background';
$this->params['breadcrumbs'][] = ['label' => 'Backgrounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="background-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
