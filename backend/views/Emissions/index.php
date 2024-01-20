<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmissionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emissions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emissions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Oid',
            'Onumber',
            'Otime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
