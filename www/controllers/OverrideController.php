<?php

namespace app\controllers;

use yii\web\Controller;

class OverrideController extends Controller
{
    public $defaultAction = 'message';

    public function actionMessage()
    {
        return 'Overrided';
    }
}
