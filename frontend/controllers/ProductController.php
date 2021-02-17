<?php
namespace frontend\controllers;

use common\models\Product;
use frontend\components\Controller;

class ProductController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findMode($id)]);
    }

    protected function findMode($id)
    {
        return Product::findOne($id);
    }
}