<?php
namespace common\models\repositories;

use common\models\Payment;

class PaymentRepository
{
    public static function getAllActive()
    {
        return Payment::find()
            ->findByActive()
            ->orderByPosition()
            ->all();
    }
}