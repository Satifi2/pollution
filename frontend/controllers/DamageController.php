<?php
/**
 * Team: NKUSaveSea
 * Coding by 叶潇晗 2112120, 20231223
 * 战损controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Damage;
use frontend\models\DamageForm;

class DamageController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new DamageForm();
        $query = Damage::find();
        //按数据库中数据oid从前往后排序
        $damages = $query->orderBy('did ASC')->all();
        return $this->render('index', ['model' => $model, 'damages' => $damages]);
    }
    public function actionEchart()
    {
        return $this->render('echart');
    }
}