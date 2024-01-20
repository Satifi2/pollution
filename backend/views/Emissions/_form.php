<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Emissions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emissions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Oid')->textInput() ?>

    <?= $form->field($model, 'Onumber')->textInput() ?>

    <?= $form->field($model, 'Otime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
