<?php

/**
 * Team: NKUSaveSea
 * Coding by 杜金轩 2111288, 20231219
 * 前台资源
 */
/* @var $this yii\web\View */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        // 'css/form.css',
        // 'css/grid.css',
        // 'css/ie.css',
        // 'css/reset.css',
        // 'css/slider.css',
        // 'css/style.css',
        // 'css/superfish.css',
    ];
    public $js = [
        // 'js/camera.js',
        // 'js/forms.js',
        // 'js/html5shiv.js',
        // 'js/jquery.js',
        // 'js/sForm.js',
        // 'js/superfish.js',
        // 'js/camera.js',
        // 'js/camera.js',
        // 'js/camera.js',
        // 'js/camera.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    // public static function addScript($view, $jsfile)
    // {
    //     $view->registerJsFile($jsfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);

    // }

    // public static function addCss($view, $cssfile)
    // {
    //     $view->registerCssFile($cssfile, [AppAsset::className(), 'depends' => 'backend\assets\AppAsset']);
    // }
}
