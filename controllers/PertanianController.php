<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class PertanianController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    

    public function actionLogin()
    {
        return $this->render('login');
    }
    public function actionMen()
    {
        return $this->render('men');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionShop()
    {
        return $this->render('shop');
    }
    public function actionContact()
    {
        return $this->render('contact');
    }
}
