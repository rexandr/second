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
        'config' => [
            'class' => 'common\components\Config',
            'email' => 'syava_trader@ukr.net',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
