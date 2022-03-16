<?php


namespace app\assets;

use yii\web\AssetBundle;

class MarketingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
    ];
    public $js = [
        'js/bundle.js',
    ];
    public $depends = [
    ];
}