<?php

namespace frontend\models\form;

use common\models\repositories\CheckoutRepository;
use common\models\repositories\ProductRepository;
use ErrorException;
use frontend\models\repositories\CheckoutProductRepository;
use Yii;
use yii\base\Model;

class CheckoutForm extends Model
{
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $comment;
    public $total_price;
    public $delivery_id;
    public $payment_id;
    public $status;
    public $created_at;
    public $updated_at;

    public function rules()
    {
        return
        [
          [['name', 'surname', 'phone', 'comment', 'email'], 'required'],
          ['email', 'email'],
          [['name', 'surname', 'phone', 'comment'],'string'],
          [['delivery_id', 'payment_id', 'status'], 'integer'],
          [['total_price'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return
        [
            'name' => 'Name',
            'surname' => 'Surname',
            'phone' => 'Phone',
            'comment' => 'Comment',
            'email' => 'Email',
        ];
    }

    public function process()
    {
        if (!$this->validate())
            return false;

        $checoutRepository = new CheckoutRepository();
        $orderId = $checoutRepository->save($this->getAttributes());
        if (!$orderId)
            throw new ErrorException();
        $checoutProductRepository = new CheckoutProductRepository();
        $productRepository = new ProductRepository();
        $productsInCart = Yii::$app->cart->products();
        $productsIds = array_keys($productsInCart);
        $products = $productRepository->getProductsByIds($productsIds);
        foreach ($products as $product)
        {
            $checoutProductRepository->save([
                'order_id' => $orderId,
                'product_id' => $product->id,
                'name' => $product->name,
                'count' => $productsInCart[$product->id],
                'price' => $product->price,
                'total_price' => $product->price * $productsInCart[$product->id]
            ]);
        }
        return 'OK';
    }
}