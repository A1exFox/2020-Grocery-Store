<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public $defaultAction = 'my-test';

    public function actions()
    {
        return [
            'test' => 'app\components\HelloAction',
        ];
    }

    public function actionIndex($name, $age = null)
    {
        // var_dump($_GET);
        return "<h1>$name - $age</h1>";
    }

    public function actionMyTest()
    {
        return "Hello";
    }
}
