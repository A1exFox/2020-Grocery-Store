<?php

namespace app\controllers;

use yii\web\Controller;

class SolarController extends Controller
{
    public function actionPlanet($name = 'Earth')
    {
        return $this->renderPartial('planet', compact('name'));
    }
}
