<?php

namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    public $sourcePath = '@app/resources';

    public $css = ['styles.css',];

    public $js = ['scripts.js'];
}
