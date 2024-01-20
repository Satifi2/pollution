<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231217
* 评论页面
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '留言';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="comment-box">
        <!-- 页面标题 -->
        <div class="comment-header"><?= Html::encode($this->title) ?></div>

        <!-- 留言展示区域 -->
        <div id="comments">
            <?php 
                $floor = 1;
                foreach ($comments as $comment): 
            ?>
                <hr class="comment-hr">
                <div class="comment-usr-info">
                    <span class="comment-floor"><?= $floor ?>楼：</span>
                    <span class="comment-usr-name"><?= Html::encode("{$comment->cuser}") ?></span>
                    <span class="comment-usr-date"><?= Html::encode("{$comment->cdate}") ?></span>
                </div>
                <p class="comment-content"><?= Html::encode("{$comment->ccomment}") ?></p>
            <?php 
                $floor++;
                endforeach; 
            ?>
        </div>

        <!-- 发表评论区域 -->
        <div class="comment-form">
            <div class="comment-header">发表评论</div>
            <?php $form = ActiveForm::begin([
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"comment-inputdiv\">{input}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    'inputOptions' => ['class' => 'comment-input'],
                ]
            ]); ?>
            <?= $form->field($model, 'user')->textInput(['id' => 'comment-user'])->label('昵称') ?>
            <?= $form->field($model, 'comment')->textarea(['id' => 'comment-text'])->label('内容') ?>
            <div class="form-group">
                <?= Html::submitButton('发表', ['class' => 'comment-btn', 'onclick' => 'return checkForm();'])?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <!-- 留言统计模块 -->
    <div class="comment-stats">
        <h3>留言统计</h3>
        <p>总留言数：<?= count($comments) ?></p>
    </div>
</div>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    function checkForm() {
        // 获取输入字段的值
        var user = document.getElementById('comment-user').value;
        var text = document.getElementById('comment-text').value;

        // 检查用户名和评论是否为空
        if (user.trim() === '' && text.trim() === '') {
            alert('请输入用户名和评论内容！');
            return false; // 阻止表单提交
        } else if (user.trim() === '') {
            alert('请输入用户名！');
            return false;
        } else if (text.trim() === '') {
            alert('请输入评论内容！');
            return false;
        }
        return true; // 允许表单提交
    }
</script>
