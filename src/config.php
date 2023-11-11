<?php

return [
    'sdkappid' => env('TENCENT_TIM_APPID'),
    'secret' => env('TENCENT_TIM_SECRET'),
    'identifier' => env('TENCENT_TIM_IDENTIFIER'),
    'cache' => [
        'path' => storage_path('framework/cache/data'),
    ],
    'log' => [
        'file' => storage_path('logs/tim.log'),
        'level' => 'debug',
    ],
];