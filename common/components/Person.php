<?php
namespace common\components;

use yii\base\Component;

class Person extends Component
{
    public $nik;
    public function send($text)
    {
        $text = $text.' - '.$this->nik;
        return $text;
    }
}