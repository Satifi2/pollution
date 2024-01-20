<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Lid')->textInput() ?>

    <?= $form->field($model, 'Lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lherf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lintro')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
