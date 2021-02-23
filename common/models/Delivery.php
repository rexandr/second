<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "delivery".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property int|null $pos
 */
class Delivery extends ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DRAFT = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'delivery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'pos'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'pos' => 'Pos',
        ];
    }

    public static function find()
    {
        return new DeliveryQuery(get_called_class());
    }
}

class DeliveryQuery extends ActiveQuery
{
    public function findByActive()
    {
        $this->andWhere(['status' => Delivery::STATUS_ACTIVE]);
        return $this;
    }

    public function orderByPosition()
    {
        $this->orderBy('pos ASC');
        return $this;
    }
}
