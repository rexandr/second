<?php
namespace common\models\repositories;

use common\models\Product;

class ProductRepository
{
    public function getProductsByIds($ids)
    {
        return Product::find()
            ->findByIds()
            ->all;
    }
}