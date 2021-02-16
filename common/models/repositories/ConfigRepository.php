<?php
namespace common\models\repositories;

use common\models\Config;

class ConfigRepository
{
    public function getValueByKey($key)
    {
        return Config::find()
            ->select('value')
            ->findByKey($key)
            ->one();
    }

    public function setValue($data)
    {
        $model = new Config();
        $model->setAttributes($data);
        $model->save();
        return true;
    }

    public function hasModel($key)
    {
        return Config::find()
            ->findByKey($key)
            ->exists();
    }
}