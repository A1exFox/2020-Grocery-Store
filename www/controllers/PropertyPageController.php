<?php

namespace app\controllers;

use yii\web\Controller;

class PropertyPageController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Check title';
        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => 'Description...'
        ]);
        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => 'Keywords...'
        ]);
        return $this->render('index');
    }
}
