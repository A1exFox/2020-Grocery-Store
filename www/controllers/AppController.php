<?php

namespace app\controllers;


class AppController extends \yii\web\Controller
{
    public $my_var;

    public function __construct($id, $module, $config = [])
    {
        // $this->my_var = 123;
        parent::__construct($id, $module, $config);
    }
}
