<?php
namespace frontend\controllers;

use yii\helpers\ArrayHelper;
use yii\web\Controller;
use common\models\Category;

class TestController extends Controller
{
    public function actionIndex()
    {
        $model = Category::find()->select('id,title')->all();
        return $this->render('index', ['model'=>$model]);
       // return $this->render('index', [ArrayHelper::map($model, 'id', 'title')]);
    }
}