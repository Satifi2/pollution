<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Radiation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radiation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sid')->textInput() ?>

    <?= $form->field($model, 'Sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Snumber')->textInput() ?>

    <?= $form->field($model, 'Stime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
