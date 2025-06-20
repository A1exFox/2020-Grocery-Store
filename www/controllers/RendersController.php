<?php

namespace app\controllers;

use yii\web\Controller;

class RendersController extends Controller
{
    public function actionGeneral()
    {
        return $this->render('view');
    }

    public function actionAjax()
    {
        return $this->renderAjax('view');
    }

    public function actionPartial()
    {
        return $this->renderPartial('view');
    }

    public function actionFile()
    {
        return $this->renderFile('@app/views/renders/view.php');
    }
}
