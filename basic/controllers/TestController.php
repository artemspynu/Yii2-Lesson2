<?php

namespace app\controllers;

use app\components\TestService;
use app\models\Product;
use yii\web\Controller;


class TestController extends Controller
{
    public function actionIndex()
    {
//        $model = new Product();
//        $model->id = 1;
//        $model->name = 'Good';
//        $model->price = 123;
//
//        return $this->render('index', [
//            'model' => $model
//        ]);

//        return $this->render('index', [
//            'var' => 'Hello World!'
//        ]);
        return \Yii::$app->test->run();
    }
}

