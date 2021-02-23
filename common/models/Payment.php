<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $status
 * @property int|null $pos
 */
class Payment extends \yii\db\ActiveRecord
{

    const STAUS_ACTIVE = 1;
    const STAUS_DRAFT = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
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
        return new PaymentQuery(get_called_class());
    }
}

class PaymentQuery extends ActiveQuery
{
    public function findByActive()
    {
        $this->andWhere(['status' => Payment::STAUS_ACTIVE]);
        return $this;
    }

    public function orderByPosition()
    {
        $this->orderBy('pos ASC');
        return $this;
    }
}