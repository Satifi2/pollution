<?php
/**
* Team: NKUsavesea
* Coding by 林子淳 2114042, 20231215
* 官员页面控制
*/
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Officer;
use frontend\models\OfficerForm;

class OfficerController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new OfficerForm();
        $query = Officer::find();
        //按数据库中数据oid从前往后排序
        $officers = $query->orderBy('oid ASC')->all();
        return $this->render('index', ['model' => $model, 'officers' => $officers]);
    }
}
