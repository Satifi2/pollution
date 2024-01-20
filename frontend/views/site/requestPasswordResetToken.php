<?php
/**
 * Team: NKUsavesea
 * Coding by 林子淳 2114042, 20231218
 * 密码重设视图
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out your email. A link to reset password will be sent there.</p>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin([
                'id' => 'request-password-reset-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"form-input\">{input}</div>\n<div class=\"form-error\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'password-reset-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
