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
use frontend\models\Manage;
use frontend\models\ManageForm;

class ManageController extends Controller
{
    public $layout = "main_layout";
    public function actionIndex()
    {
        $model = new ManageForm();
        $query = Manage::find();
        //按数据库中数据oid从前往后排序
        $manages = $query->orderBy('oid ASC')->all();
        return $this->render('index', ['model' => $model, 'manages' => $manages]);
    }
}
