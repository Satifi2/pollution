<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231223
 * 伤亡controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class VictimController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionEchart()
    {
        return $this->render('echart');
    }
}