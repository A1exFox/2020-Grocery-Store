<?php

namespace app\controllers;

use yii\web\Controller;

class NewRouteController extends Controller
{
    public $defaultAction = 'new';

    public function actionNew()
    {
        return 'Overrided';
    }
}
