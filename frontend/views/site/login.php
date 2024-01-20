<?php
/**
 * Team: NKUsavesea
 * Coding by 林子淳 2114042, 20231218
 * 登录界面视图
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"comment-inputdiv\">{input}</div>\n<div class=\"form_error\">{error}</div>",
                    'labelOptions' => ['class' => 'control-label'],
                ],
            ]); ?>

                <div class="signup_login_label">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>

                <div class="signup_login_label">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>

                <div class="signup_login_label">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>

                <div class="signup_login_label">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
