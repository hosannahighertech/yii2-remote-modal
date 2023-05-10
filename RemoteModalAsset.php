<?php

namespace cenotia\components\modal;

use Yii;
use yii\web\AssetBundle;

class RemoteModalAsset extends AssetBundle
{
    public $sourcePath = '@vendor/cenotia/yii2-remote-modal/assets';

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];

    public $css = [
        'css/remote-modal.css'
    ];

    public $js = [
        'js/hasAttr.js',
        'js/remote-modal.js'
    ];
}
