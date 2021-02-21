<?php
namespace frontend\models\repositories;

use common\models\OrderProduct;

class CheckoutProductRepository
{
    public function save($attributes)
    {
        $model = new OrderProduct();
        $model->setAttributes($attributes);
        if (!$model->save())
            return false;
        return true;
    }
}