<?php

namespace app\controllers;

use app\models\Country;
use app\models\EntryForm;
use yii\web\NotFoundHttpException;
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

    public function actionCreate()
    {
        $this->layout = 'test';
        $this->view->title = 'Create action';

        $country = new Country();

        if (\yii::$app->request->isAjax) {
            $country->load(\Yii::$app->request->post());
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($country);
        }

        $post = \Yii::$app->request->post();
        $load = $country->load($post);
        $success = $load && $country->save();

        if ($success) {
            \Yii::$app->session->setFlash('success', 'OK');
            return $this->refresh();
        }

        // $country->code = 'KZ';
        // $country->name = 'Kazachstan';
        // $country->population = '28000000';
        // $country->status = 1;
        // if ($country->save()) {
        //     \Yii::$app->session->setFlash('success', 'OK');
        // } else {
        //     \Yii::$app->session->setFlash('error', 'OK');
        // }

        return $this->render('create', compact('country'));
    }

    public function actionUpdate()
    {
        $this->layout = 'test';
        $this->view->title = 'Update';

        $country = Country::findOne('DE');
        if (!$country) {
            throw new NotFoundHttpException("Country not found");
        }

        if ($country->load(\Yii::$app->request->post()) && $country->save()) {
            \Yii::$app->session->setFlash('success', 'OK');
        }

        return $this->render('update', compact('country'));
    }

    public function actionDelete($code = '')
    {
        $this->layout = 'test';
        $this->view->title = 'Delete';

        $country = Country::findOne($code);
        if ($country) {
            if (false !== $country->delete()) {
                \Yii::$app->session->setFlash('success', 'OK');
            } else {
                \Yii::$app->session->setFlash('error', 'Error');
            }
        }

        return $this->render('delete', compact('country'));
    }
}
