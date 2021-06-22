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
class PoliceAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/bootstrap.min.css',
		'css/bootstrap.responsive.min.css', //не нужен
		'css/docs.css', // хз
		'css/font-awesome.min.css', //нет картинок в футере
		'css/main.css', 
		'css/main.less', 
		'css/mixins.css', 
		'css/mixins.less',
		'css/prettify.css',
		'css/sl-slide.css', // шо то с ним
		'css/variables.css',
		'css/variables.less',

    ];
    public $js = [
		'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js',
		// 'js/vendor/jquery-1.9.1.min.js', //мешает 
		'js/vendor/bootstrap.min.js',
		'js/main.js',
		'js/jquery.ba-cond.min.js',
		'js/jquery.slitslider.js',
		'js/sl-slider.js',
		'js/vendor/bootstrap.min.js', //хз
		// 'js/vendor/jquery-1.9.1.min.js', //хз мешает
		'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', //хз
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}