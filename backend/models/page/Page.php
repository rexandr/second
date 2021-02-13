<?php
namespace backend\models\page;



use yii\behaviors\TimestampBehavior;

class Page extends \common\models\Page
{
    public function behaviors()
    {
        return
            array_merge
            (
                parent::behaviors(),
                [TimestampBehavior::class]
            );
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Катагорія',
            'meta_title' => 'Заголовок',
            'meta_description' => 'Короткий зміст',
            'header' => 'Header',
            'description' => 'Опис',
            'image' => 'Зображення',
            'status' => 'Статус',
            'created_at' => 'Створено',
            'updated_at' => 'Модифіковано',
        ];
    }
}