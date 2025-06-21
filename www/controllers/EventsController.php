<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\View;

class EventsController extends Controller
{
    public function actionIndex()
    {
        $this->view->on(View::EVENT_BEGIN_BODY, function () {
            echo 'Event begin body';
        });
        return $this->render('index');
    }
}
