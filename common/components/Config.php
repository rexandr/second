<?php
namespace common\components;

use yii\base\Component;

class Config extends Component
{
    public $email;

    public function get($name)
    {
        return $name.' - - '.$this->email;
    }
}