<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 03.03.2018
 * Time: 17:17
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminAppAsset extends AssetBundle
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
    public $js = [
        'dashboard/plugins/jquery/jquery-2.2.0.min.js',
        'dashboard/plugins/materialize/js/materialize.min.js',
        'dashboard/plugins/material-preloader/js/materialPreloader.min.js',
        'dashboard/plugins/jquery-blockui/jquery.blockui.js',
        'dashboard/plugins/waypoints/jquery.waypoints.min.js',
        'dashboard/plugins/counter-up-master/jquery.counterup.min.js',
        'dashboard/plugins/jquery-sparkline/jquery.sparkline.min.js',
        'dashboard/plugins/chart.js/chart.min.js',
        'dashboard/plugins/flot/jquery.flot.min.js',
        'dashboard/plugins/flot/jquery.flot.time.min.js',
        'dashboard/plugins/flot/jquery.flot.symbol.min.js',
        'dashboard/plugins/flot/jquery.flot.resize.min.js',
        'dashboard/plugins/flot/jquery.flot.tooltip.min.js',
        'dashboard/plugins/curvedlines/curvedLines.js',
        'dashboard/plugins/peity/jquery.peity.min.js',
        'dashboard/js/alpha.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}