<?php
/**
 * Team: NKUSaveSea
 * Coding by 林子淳 2114042, 20231219
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cdate')->textInput() ?>

    <?= $form->field($model, 'ccomment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuser')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
