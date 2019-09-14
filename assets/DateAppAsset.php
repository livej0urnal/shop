<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 06.03.2018
 * Time: 20:45
 */

namespace app\assets;


class DateAppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dashboard/css/custom.css',
        'dashboard/plugins/materialize/css/materialize.min.css',
        'dashboard/plugins/metrojs/MetroJs.min.css',
        'dashboard/plugins/weather-icons-master/css/weather-icons.min.css',
        'dashboard/css/alpha.min.css',
    ];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}