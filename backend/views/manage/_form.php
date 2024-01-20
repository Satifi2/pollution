<?php
/**
 * Team: NKUSaveSea
 * Coding by 林子淳 2114042, 20231219
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Manage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oid')->textInput() ?>

    <?= $form->field($model, 'oname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ocountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'odescription')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
