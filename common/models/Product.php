<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property float|null $price
 * @property string|null $image
 * @property int|null $status
 * @property int|null $quantity
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Product extends \yii\db\ActiveRecord
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
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['status', 'quantity', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
            'image' => 'Image',
            'status' => 'Status',
            'quantity' => 'Quantity',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function find()
    {
        return new ProductQuery(get_called_class());
    }
}

class ProductQuery extends ActiveQuery
{
    public function findByIds($ids)
    {
        $this->andWhere(['in', 'id', 'ids']);
        return $this;
    }
}
