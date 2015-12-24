<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            
        ],
        /*
        'urlManager' =>[
                'class'=>'yii\web\UrlManager',
                'enablePrettyUrl'=>true,
                'showScriptName'=>false,
            ],*/
            //робимо щоби силки були красиві
    ],
];
