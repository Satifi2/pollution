<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Substances */

$this->title = 'Create Substances';
$this->params['breadcrumbs'][] = ['label' => 'Substances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="substances-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
