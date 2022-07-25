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
        
        "https://fonts.googleapis.com/css?family=Montserrat:400,700",
        "https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700",
        "/startbootstrap/css/styles.css",
    ];
    public $js = [
        "https://use.fontawesome.com/releases/v6.1.0/js/all.js",
        "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js",
        "https://cdn.startbootstrap.com/sb-forms-latest.js",
        "/startbootstrap/js/scripts.js"
        ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
