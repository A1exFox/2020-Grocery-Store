<?php

namespace app\controllers;

use yii\web\Controller;

class AliasController extends Controller
{
    public $defaultAction = 'custom';
    public function actionCustom()
    {
        return 'Alias';
    }
}
