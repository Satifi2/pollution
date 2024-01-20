<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BackgroundSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="background-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Bid') ?>

    <?= $form->field($model, 'Bname') ?>

    <?= $form->field($model, 'Btime') ?>

    <?= $form->field($model, 'Ber') ?>

    <?= $form->field($model, 'Bintro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
