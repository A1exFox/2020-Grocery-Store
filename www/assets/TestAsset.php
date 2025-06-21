<?php

namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    public $css = ['css/styles.css'];

    public $js = ['js/scripts.js'];

    public $depends = ['yii\web\YiiAsset'];
}
