<?php

use yii\web\View;

$this->on(View::EVENT_END_BODY, function () {
    echo 'Event end body';
});
