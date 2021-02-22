<?php
namespace frontend\models\repositories;

use common\models\Order;

class CheckoutRepository
{
    public function save($attributes)
    {
        $model = new Order();
        $model->setAttributes($attributes);
        if (!$model->save())
            //print_r($model->errors);
            return false;
        return $model->id;
    }

    public function update($id, $attributes)
    {
        $model = Order::findOne($id);
        $model->setAttributes($attributes);
        if (!$model->save())
            return false;
        return $model->id;
    }
}