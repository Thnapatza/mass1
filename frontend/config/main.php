<?php

use \yii\web\Request;
use \yii\web\View;

$baseUrl = str_replace ( '/frontend/web', '', (new Request())->getBaseUrl() );
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'dosamigos\google\maps\MapAsset' => [
                    'options' => [
                        'key' => 'AIzaSyDlMCXTr74f7ah640MrjFbb3V4KUHhqRis',// ใส่ API ตรงนี้ครับ
                        'language' => 'th',
                        'version' => '3.1.18'
                    ]
                ]
                ]
            ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '163106831033433',
                    'clientSecret' => '01de7a5df3bc0198c60d91025ce68e7d'
                ]
            ]
            
        ],
        
        'request' => [
            'baseUrl' => $baseUrl,
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'urlManager' => [
            'baseUrl' => $baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            //'suffix' => '.html',
            'rules' => [
                'home' => '/site/index',
                'about' => '/site/about',
                'login' => '/site/login',
                'logout' => '/site/logout',
                ///'mySecret' => '/work/create',
                
                '<controller>/<id:\d+>' => '<controller>/view',
                '<controller:(course|courseonsemester)>/update/<id:\d+>' => '<controller>/update',
                'courseonsemester/admin/<time:\d+>' => 'courseonsemester/admin',
            ]
        ],
//         'urlManager' => [
//             'enablePrettyUrl' => true,
//             'showScriptName' => true,
//             'rules' => [
//                 '<controller>/<id:\d+>' => '<controller>/view',
//                 '<controller:(course|courseonsemester)>/update/<id:\d+>' => '<controller>/update',
//                 'courseonsemester/admin/<time:\d+>' => 'courseonsemester/admin',
//             ],
//         ],
        
    ],
    'params' => $params,
];
