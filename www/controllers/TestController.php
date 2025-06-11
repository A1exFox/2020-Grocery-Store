<?php

namespace app\controllers;

use app\models\EntryForm;

class TestController extends AppController
{
    // public $defaultAction = 'my-test';
    // public $layout = 'test';
    public $my_var;

    // public function actions()
    // {
    //     return [
    //         'test' => 'app\components\HelloAction',
    //     ];
    // }

    public function actionIndex($name = 'Guest', $age = 25)
    {
        $this->layout = 'test';
        $this->view->title = 'Test page';
        $this->view->params['t1'] = 'T1 params';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'test test desc'], 'description');

        $model = new EntryForm();

        return $this->render('index', compact('model'));
    }

    public function actionMyTest()
    {
        $this->layout = 'test';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'test test desc'], 'description');
        return $this->render('my-test');
    }
}
