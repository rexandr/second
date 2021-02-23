<?php
namespace common\models\repositories;

use common\models\Delivery;

class DeliveryRepository
{
    public static function getAllActive()
    {
        return Delivery::find()
            ->findByActive()
            ->orderByPosition()
            ->all();
    }
}