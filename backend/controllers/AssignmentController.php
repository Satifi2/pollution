<?php

/**
 * Team: NKUsavesea
 * Coding by 张丽婷 2111190, 20231217
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

class AssignmentController extends Controller
{
    public $layout = "main_layout";
    
    function getPageUrl() {
        $pageURL = 'http';
        if(isset($_SERVER['HTTPS']) && $_SERVER["HTTPS"] == "on"){
            $pageURL .= "s";
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        }else{
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    function getId(){
        $url = $this->getPageUrl();
        $urlQuery = html_entity_decode(parse_url($url)['query']);
        parse_str($urlQuery,$param);
        if(array_key_exists('id', $param)){
            // return intval($param['id']);
            return $param['id'];
        }
        else{
            // return 0;
            return '0';
        }
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPersonal(){
        $id = $this->getId();
        switch($id){
            case '0':return $this->render('personal');break;
            case '1':return $this->render('personal1');break;
            case '2':return $this->render('personal2');break;
            case '3':return $this->render('personal3');break;
            case '4':return $this->render('personal4');break;
            default:break;
        }
    }

    public function actionTeam(){
        return $this->render('team');
    }
}