<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $password
 * @property int|null $status
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name', 'password'], 'string', 'max' => 255],
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
            'password' => 'Password',
            'status' => 'Status',
        ];
    }
}
