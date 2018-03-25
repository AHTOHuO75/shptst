<?php
/** @var array $params */
return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'cache' => false,
    'rules' => [
        [
            'pattern' => '',
            'route' => 'site/index',
            'suffix' => ''
        ],
        [
            'pattern' => '<a>',
            'route' => 'site/<a>',
            'suffix' => '.html'
        ],
    ],
];