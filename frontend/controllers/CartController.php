<?php
namespace frontend\controllers;

use common\models\repositories\ProductRepository;
use frontend\components\Controller;
use Yii;

class CartController extends Controller
{
    public function actionIndex()
    {
        $productsInCart = Yii::$app->cart->products();
        $products = null;
        if ($productsInCart)
        {
            $productsIds = array_keys($productsInCart);
            $productsRepository = new ProductRepository();
            $products = $productsRepository->getProductsByIds($productsIds);
        }
        return $this->render('index', ['products' => $products, 'productsInCart'=> $productsInCart]);
    }

    public function actionAdd($id)
    {
        Yii::$app->cart->add($id);
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDel($id)
    {
        \Yii::$app->cart->del($id);
        return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionClear()
    {
        \Yii::$app->cart->clear;
        return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actiobDelete($id)
    {
        \Yii::$app->cart->delete($id);
        return $this->redirect(\Yii::$app->request->referrer);
    }
}