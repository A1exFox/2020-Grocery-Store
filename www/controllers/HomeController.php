<?php

namespace app\controllers;

use app\models\Product;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $offers = Product::find()
            ->where(['is_offer' => 1])
            ->limit(4)
            ->all();

        // debug($offers);
        // die;

        return $this->render('index', compact('offers'));
    }
}
