<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'adminlte/bootstrap/css/bootstrap.min.css',
        'adminlte/dist/css/AdminLTE.min.css',
        'adminlte/dist/css/sweetalert.css',
        'adminlte/dist/css/skins/_all-skins.min.css',
        'adminlte/dist/css/animate.min.css',
        'adminlte/plugins/font-awesome/css/font-awesome.min.css',
        'adminlte/plugins/ionicons/css/ionicons.min.css',
        'adminlte/plugins/iCheck/flat/blue.css',
        'adminlte/plugins/morris/morris.css',
        'adminlte/plugins/select2now/select2.css'
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $js = [
         'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js',
        'adminlte/bootstrap/js/bootstrap.min.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
