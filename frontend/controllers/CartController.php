<?php
namespace frontend\controllers;

use common\models\Order;
use common\models\repositories\ProductRepository;
use frontend\components\Controller;
use frontend\models\form\CheckoutForm;
use frontend\models\repositories\CheckoutRepository;
use Yii;
use yii\web\NotFoundHttpException;

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
        Yii::$app->cart->del($id);
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionClear()
    {
        Yii::$app->cart->clear;
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDelete($id)
    {
        Yii::$app->cart->deleteProduct($id);
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionSuccess($id)
    {
        $checkoutRepository = new CheckoutRepository();
        $model = $checkoutRepository->findById($id);
        if (!$model)
            throw  new NotFoundHttpException();
        return $this->render('success', ['model' => $model]);
    }

    public function actionCheckout()
    {
        $model = new CheckoutForm();
        if ($model->load(Yii::$app->request->post())) {
           if (($id = $model->process())!==null)
           {
               Yii::$app->cart->clear();
               return $this->redirect(['cart/success', 'id'=>$id]);
           }
           return $this->refresh();
        }
        return $this->render('checkout', [
            'model' => $model,
        ]);
    }
}