<?php

namespace app\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionGet($name = 'John', $age = 25)
    {
        return "Username: $name, Age: $age";
    }
}
