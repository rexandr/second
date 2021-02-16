<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string|null $key
 * @property string|null $value
 * @property string|null $label
 * @property int|null $pos
 */
class Config extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value'], 'string'],
            [['pos'], 'integer'],
            [['key', 'label'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'label' => 'Label',
            'pos' => 'Pos',
        ];
    }

    public static function find()
    {
        return new ConfigQuery(get_called_class());
    }

    public function getId()
    {
        $this->id;
    }

    public function getKey()
    {
        $this->key;
    }

    public function getValue()
    {
        $this->value;
    }

    public function getLabel()
    {
        $this->label;
    }

    public function getPos()
    {
        $this->pos;
    }
}

class ConfigQuery extends ActiveQuery
{
    public function findByKey($key)
    {
        $this->andWhere(['key'=>$key]);
        return $this;
    }
}