<?php

namespace app\controllers;

use yii\web\Controller;

class ParamsController extends Controller
{
    public function actionIndex()
    {
        $this->view->params['myvar'] = 'My variable';
        return $this->renderPartial('index');
    }
}
