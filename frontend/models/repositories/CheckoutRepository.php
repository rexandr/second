<?php
namespace common\models\repositories;

use common\models\Order;

class CheckoutRepository
{
    public function save($attributes)
    {
        $model = new Order();
        $model->setAttributes($attributes);
        if (!$model->save())
            return false;
        return $model->id;
    }
}