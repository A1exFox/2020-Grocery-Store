<?php

namespace app\controllers;

use yii\web\View;

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
        // debug(\Yii::getAlias('@webroot'));
        // debug(\Yii::getAlias('@web'));
        $this->my_var = 'My variable';
        $this->layout = 'test';
        $this->view->title = 'Test page';
        // return $this->renderFile('@app/views/test/index.php');
        // return $this->renderAjax('index');
        // return $this->renderPartial('index');
        // return $this->render('index', ['name' => $name, 'age' => $age]);
        // \Yii::$app->view->params['t1'] = 'T1 params';
        $this->view->params['t1'] = 'T1 params';

        \Yii::$app->view->on(View::EVENT_END_BODY, function () {
            echo "<p>&copy Yii2 " . date("Y") . "</p>";
        });

        return $this->render('index', compact('name', 'age'));
    }

    public function actionMyTest()
    {
        $this->layout = 'test';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'test test desc'], 'description');
        return $this->render('my-test');
    }
}
