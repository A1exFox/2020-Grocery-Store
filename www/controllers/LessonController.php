<?php

namespace app\controllers;

use yii\web\Controller;

class LessonController extends Controller
{
    public function actionLesson()
    {
        return $this->render('index');
    }
}
