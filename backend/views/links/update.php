<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Links */

$this->title = 'Update Links: ' . $model->Lid;
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Lid, 'url' => ['view', 'id' => $model->Lid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="links-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
