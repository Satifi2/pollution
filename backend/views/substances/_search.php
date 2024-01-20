<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubstancesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="substances-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Sid') ?>

    <?= $form->field($model, 'Sname') ?>

    <?= $form->field($model, 'Selement') ?>

    <?= $form->field($model, 'Sintro') ?>

    <?= $form->field($model, 'Slink') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
