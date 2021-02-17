<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cart' => [
            'class' => 'common\components\Cart'
        ],
        'person' => [
            'class' => 'common\components\Person',
            'nik' => 'ololol',
        ],
        'config' => [
            'class' => 'common\components\Config',
            'email' => 'syava_trader@ukr.net',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
