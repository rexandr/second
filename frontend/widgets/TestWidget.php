<?php
namespace frontend\widgets;

use yii\base\Widget;

class TestWidget extends Widget
{
    public $view;

    public function run()
    {
        parent::run();
        $text = 'hello';
        return $this->render($this->view, ['text' => $text]);
    }
}