<?php

namespace app\controllers;

use yii\web\Controller;

class IncludeController extends Controller
{
    public function actionView()
    {
        return $this->renderPartial('view');
    }
}
