<?php
/**
 * Team: NKUsavesea
 * Coding by 林子淳 2114042, 20231218
 * 注册账号视图
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'options' => ['class' => 'form-horizontal'],
                ]); ?>

                <div class="signup_login_label">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>

                <div class="signup_login_label">
                    <?= $form->field($model, 'email') ?>
                </div>

                <div class="signup_login_label">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
