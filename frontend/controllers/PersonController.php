<?php
namespace frontend\controllers;

use frontend\components\Controller;
use Yii;

class PersonController extends Controller
{
    public function actionIndex()
    {
        //$text = Yii::$app->person->send();
        return $this->render('index');
    }
}