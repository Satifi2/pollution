<?php
/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 2023/12/19
 * 新闻、事件controller
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\News;
use frontend\models\NewsForm;
use frontend\models\Substances;
use frontend\models\SubstancesForm;
use frontend\models\Background;
use frontend\models\BackgroundForm;
use frontend\models\Links;
use frontend\models\LinksForm;

class NewsController extends \yii\web\Controller
{
    public $layout = "main_layout";
    
    //新闻主页
    public function actionIndex()
    {
        $model = new NewsForm();
        $qnews = News::find();
        $news = $qnews->orderBy('Ndate DESC')->all(); // 按时间倒序，最新的优先

        $model = new SubstancesForm();
        $qsubstances = Substances::find();
        $data = $qsubstances->orderBy('Sid')->asArray()->all();

        $model = new BackgroundForm();
        $qbackground = Background::find();
        $background = $qbackground->orderBy('Btime DESC')->all();

        return $this->render('index', ['model' => $model, 'news' => $news, 'data' => $data, 'background' => $background]);
    }

    //时事热点详情页
    public function actionDetail()
    {
        $title = Yii::$app->request->get('title', '');
        $title = trim($title);
        $model = new NewsForm();
        $news = News::find()->where(['like', 'Ntitle', $title])->all();
        return $this->render('detail', ['news' => $news]);
    }

    //背景回顾详情页
    public function actionBackground()
    {
        $title = Yii::$app->request->get('title', '');
        $title = trim($title);
        $model = new BackgroundForm();
        $background = Background::find()->where(['like', 'Bname', $title])->all();
        return $this->render('background', ['background' => $background]);
    }

    //底部链接
    public function actionLinks()
    {
        $name = Yii::$app->request->get('name', '');
        $name = trim($name);
        $model = new LinksForm();
        $links = Links::find()->where(['like', 'Lname', $name])->all();
        return $this->render('links', ['links' => $links]);
    }
}
