<?php

/**
 * Team: NKUSaveSea
 * Coding by 杜金轩 2111288, 20231220
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Members */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mdescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mgroup')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
