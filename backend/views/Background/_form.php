<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Background */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="background-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Bid')->textInput() ?>

    <?= $form->field($model, 'Bname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Btime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bintro')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
