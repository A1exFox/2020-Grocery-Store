<?php

$head = <<<JS
    alert('POS_HEAD')
JS;
$begin = <<<JS
    alert('POS_BEGIN')
JS;
$end = <<<JS
    alert('POS_END')
JS;
$ready = <<<JS
    alert('POS_READY')
JS;
$load = <<<JS
    alert('POS_LOAD')
JS;

$this->registerJs($head, \yii\web\View::POS_HEAD);
$this->registerJs($begin, \yii\web\View::POS_BEGIN);
$this->registerJs($end, \yii\web\View::POS_END);
$this->registerJs($ready, \yii\web\View::POS_READY);
$this->registerJs($load, \yii\web\View::POS_LOAD);
