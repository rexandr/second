<?php
namespace common\components;

use common\models\repositories\ConfigRepository;
use yii\base\Component;

class Config extends Component
{
    public $email;

    public function get($name)
    {
        $repository = new ConfigRepository();
        $model = $repository->getValueByKey($name);
        if ($model)
            return $model->getValue();
        return false;
    }

    public function set($name, $value)
    {
        $repository = new ConfigRepository();
        $repository->setValue([
            'key' => $name,
            'value' => $value
        ]);
        return true;
    }

    public function has($name)
    {
        $repository = new ConfigRepository();
        return $repository->hasModel($name);
    }
}