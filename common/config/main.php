<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'config' => [
            'class' => 'common\components\Config',
            'email' => 'syava_tarder@ukr.net',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
