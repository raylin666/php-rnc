<?php
// +----------------------------------------------------------------------
// | Created by linshan. 版权所有 @
// +----------------------------------------------------------------------
// | Copyright (c) 2021 All rights reserved.
// +----------------------------------------------------------------------
// | Technology changes the world . Accumulation makes people grow .
// +----------------------------------------------------------------------
// | Author: kaka梦很美 <1099013371@qq.com>
// +----------------------------------------------------------------------

use Monolog\DateTimeImmutable;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Raylin666\Logger\Logger;

return [
    'default' => [
        'handlers' => [
            [
                'class'         =>  RotatingFileHandler::class,
                'constructor'   => [
                    'filename'      =>  'runtime/logs/rnc.log',
                    'maxFiles'      =>  31,
                    'level'         =>  Logger::DEBUG,
                    'bubble'        =>  true,
                    'filePermission'=>  0666,
                    'useLocking'    =>  false,
                ],
            ]
        ],
        'formatter' => [
            'class'         =>  LineFormatter::class,
            'constructor'   =>  [
                'format'                        =>  "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n",
                'dateFormat'                    =>  new DateTimeImmutable(true, new DateTimeZone(date_default_timezone_get() ?: 'PRC')),
                'allowInlineLineBreaks'         => true,
                'ignoreEmptyContextAndExtra'    => false,
            ]
        ],
    ],
];