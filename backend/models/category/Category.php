<?php
namespace backend\models\category;

use yii\behaviors\TimestampBehavior;

class Category extends \common\models\Category
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                TimestampBehavior::className()
            ]
        );
    }
}