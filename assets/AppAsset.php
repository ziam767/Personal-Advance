<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'dist/css/adminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        'dist/font/css/font-awesome.min.css',
        'bootstrap/css/bootstrap.js',
        'bootstrap/css/bootstrap.min.js',
    ];
    public $js = [
        'dist/js/app.js',
        //'dist/js/app.min.js',
        //'dist/js/pages/dashboard.js',
        'bootstrap/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
