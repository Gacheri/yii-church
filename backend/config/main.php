<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'id' => 'app-backend',
    'name'=>'KANISANI ADMIN PAGE',
    'homeUrl'=>['site/index'],
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    
    'components' => [
        // 'notifier' =>[
        //     'class' => '\tuyakhov\notifications\Notifier',
        //     'channels' => [
        //         'mail' => [
        //             'class' => '\tuyakhov\notifications\channels\MailChannel',
        //             'from' => 'michenibrenda81@gmail.com'
        //         ],
        //         'sms' => [
        //             'class' => '\tuyakhov\notifications\channels\TwilioChannel',
        //             'accountSid' => '...',
        //             'authToken' => '...',
        //             'from' => '+254799238995'
        //         ],
        //         // 'telegram' => [
        //         //      'class' => '\tuyakhov\notifications\channels\TelegramChannel',
        //         //      'botToken' => '...'
        //         //  ],
        //         'database' => [
        //              'class' => '\tuyakhov\notifications\channels\ActiveRecordChannel'
        //         ]
        //     ],
        // ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'assetManager'=>[
            'appendTimestamp'=>true
        ],
      
        'Jeapie' => [
            'class' => 'ext.Jeapie.PushMessageComponent',
            'configs' => [
            'token' => 'userToken',
            'title' => 'title',
            'message' => 'message',
            'priority' => 0,
            ],
            'import'=>['application.extentions.Jeapie.*'],
        ],
        
    ],
    'params' => $params,
];
