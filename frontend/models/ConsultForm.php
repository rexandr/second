<?php
namespace frontend\models;

use yii\base\Model;

class ConsultForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $text;

    public function rules()
    {
        return
            [
                [['name', 'phone', 'email', 'text'],'trim'],
                [['name', 'phone', 'email', 'text'],'required'],
                [['name', 'phone', 'text'],'string'],
                ['email','email'],
            ];
    }
}