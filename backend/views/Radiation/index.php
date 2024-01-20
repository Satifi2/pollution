<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RadiationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Radiations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radiation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Radiation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Sid',
            'Sname',
            'Snumber',
            'Stime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
