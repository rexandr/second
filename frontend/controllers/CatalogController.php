<?php
namespace frontend\controllers;

use common\models\Product;
use frontend\components\Controller;
use yii\data\ActiveDataProvider;

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(
          [
              'query' => Product::find()->where(['status'=>1])->orderBy('created_at DESC'),
              'pagination' =>
              [
                  'pageSize' => 10,
              ],
          ]
        );
        //$this->view->title = 'New page';
        return $this->render('index', ['listDataProvider'=>$dataProvider]);
    }
}