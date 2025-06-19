<?php

namespace app\controllers;

use yii\web\Controller;

class StandaloneController extends Controller
{
    public function actions()
    {
        return [
            'single' => 'app\components\StandaloneAction',
        ];
    }
}
