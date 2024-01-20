<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Substances */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="substances-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sid')->textInput() ?>

    <?= $form->field($model, 'Sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Selement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sintro')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Slink')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
