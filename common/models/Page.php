<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $meta_title
 * @property string|null $meta_description
 * @property string $header
 * @property string|null $description
 * @property string|null $image
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['meta_title', 'header'], 'required'],
            [['meta_description', 'description'], 'string'],
            [['meta_title', 'header', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'header' => 'Header',
            'description' => 'Description',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
