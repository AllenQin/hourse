<?php

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
    	'css/bootstrap.css',
    	'css/style.css',
    	'css/prettyPhoto.css',
    	'css/bootstrap-responsive.css',
    ];
    public $js = [
    	'js/jquery.js',
    	'js/bootstrap.js',
   		'js/jquery.scrollTo-1.4.2-min.js',
    	'js/jquery.localscroll-1.2.7-min.js',
    	'js/site.js'
    ];
    public $depends = [
    ];
}
