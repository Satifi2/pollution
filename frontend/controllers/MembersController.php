<?php
/**
 * Team: NKUsavesea
 * Coding by 杜金轩 2111288, 20231222
 * 成员controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Members;

class MembersController extends Controller
{
    public $layout = "main_layout_mem";
    public function actionIndex()
    {
        $query = Members::find();
        $members = $query->orderBy('mid')->all();
        return $this->render('index', ['members' => $members]);
    }

    public function actionMem()
    {
        return $this->render('mem');
    }
}