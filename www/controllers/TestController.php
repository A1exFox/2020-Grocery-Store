<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    // public $defaultAction = 'my-test';
    public $my_var;

    // public function actions()
    // {
    //     return [
    //         'test' => 'app\components\HelloAction',
    //     ];
    // }

    public function actionIndex($name = 'Guest', $age = 25)
    {
        $this->my_var = 'My variable';
        // return $this->renderFile('@app/views/test/index.php');
        // return $this->renderAjax('index');
        // return $this->renderPartial('index');
        // return $this->render('index', ['name' => $name, 'age' => $age]);
        \Yii::$app->view->params['t1'] = 'T1 params';
        return $this->render('index', compact('name', 'age'));
    }

    public function actionMyTest()
    {
        return "Hello";
    }
}
