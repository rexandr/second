<?php
namespace common\helpers;

use common\models\Category;
use yii\helpers\ArrayHelper;

class CategoryHelper
{
    public static function getCategoryList()
    {
        $model = Category::find()->select('id, title, meta_title')->all();
        return ArrayHelper::map($model, 'id',
            function ($model)
            {
                return $model->meta_title. '-' .$model->title;
            }
            );
    }
}
