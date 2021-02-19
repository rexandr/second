<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $soname
 * @property int|null $age
 * @property string|null $address
 * @property string|null $photo
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Person extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return
            array_merge(
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
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age', 'created_at', 'updated_at'], 'integer'],
            [['name', 'soname', 'address', 'photo'], 'string', 'max' => 255],
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
            'soname' => 'Soname',
            'age' => 'Age',
            'address' => 'Address',
            'photo' => 'Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
