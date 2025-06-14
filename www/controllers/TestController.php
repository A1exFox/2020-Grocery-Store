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

        // $countries = Country::find()
        //     ->where('population < :population AND code <> :code', [':code' => 'AU', 'population' => 100000000])
        //     ->all();

        // $countries = Country::find()
        //     ->where([
        //         'code' => ['DE', 'FR', 'GB',],
        //         'status' => 1,
        //     ])
        //     ->all();

        // $countries = Country::find()
        //     ->where(['like', 'name', 'ni',])
        //     ->all();

        // $countries = Country::find()
        //     ->orderBy('population ASC')
        //     ->all();

        // $countries = Country::find()->count();

        // $countries = Country::find()
        //     ->where(['code' => 'CN'])
        //     ->one();

        // $countries = Country::findAll(['DE', 'FR', 'GB']);

        // $countries = Country::findOne('CN');

        $countries = Country::find()
            ->asArray()
            ->all();

        // debug($countries, true);

        return $this->render('view', compact('countries'));
    }
}
