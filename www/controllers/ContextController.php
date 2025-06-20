<?php

namespace app\controllers;

use yii\web\Controller;

class ContextController extends Controller
{
    public $data;

    public function actionVar()
    {
        $this->data = 'Content';
        return $this->renderPartial('var');
    }
}
