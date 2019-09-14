<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 25.02.2018
 * Time: 15:43
 */

namespace app\assets;


use yii\web\AssetBundle;

class CheckAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-icons.css',
        'css/sliders.css',
        'css/style.css',
        'css/animate.min.css',
        'css/magnific-popup.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/plugins.js',
        'js/scripts.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}