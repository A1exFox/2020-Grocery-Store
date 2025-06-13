<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use yii\web\Response;
use yii\widgets\ActiveForm;

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

        $model->load(\Yii::$app->request->post());
        if (\Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->validate()) {
                return ['message' => 'ok'];
            } else {
                return ActiveForm::validate($model);
            }
            //return ActiveForm::validate($model);
        }

        return $this->render('index', compact('model'));
    }

    public function actionMyTest()
    {
        $this->layout = 'test';
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'test test desc'], 'description');
        return $this->render('my-test');
    }

    public function actionView()
    {
        $this->layout = 'test';
        $this->view->title = 'Работа с моделями';
        $model = new Country();
        return $this->render('view', compact('model'));
    }
}
