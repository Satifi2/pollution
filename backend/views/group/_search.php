<?php
/**
 * Team: NKUSaveSea
 * Coding by 林子淳 2114042, 20231219
 * CRUD
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GroupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'gid') ?>

    <?= $form->field($model, 'gname') ?>

    <?= $form->field($model, 'gdate') ?>

    <?= $form->field($model, 'gschool') ?>

    <?= $form->field($model, 'gdescription') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
