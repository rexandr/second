<?php

namespace common\models;

use Yii;

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
}
