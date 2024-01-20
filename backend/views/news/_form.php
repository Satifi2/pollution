<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nid')->textInput() ?>

    <?= $form->field($model, 'Ntitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nauthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ndate')->textInput() ?>

    <?= $form->field($model, 'Ncontent')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
