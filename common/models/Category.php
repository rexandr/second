<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $meta_title
 * @property string|null $meta_description
 * @property string $title
 * @property string|null $description
 * @property int|null $status
 * @property string|null $image
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meta_title', 'title'], 'required'],
            [['meta_description', 'description'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['meta_title', 'title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
