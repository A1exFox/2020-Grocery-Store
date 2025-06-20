<?php

namespace app\controllers;

use yii\web\Controller;

class BlockController extends Controller
{
    public function actionIndex()
    {
        $data = 'Content from block';
        return $this->render('view', compact('data'));
    }
}
