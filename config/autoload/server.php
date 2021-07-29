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

use Raylin666\Framework\Swoole\Events\OnRequest;
use Raylin666\Framework\Swoole\Events\OnWorkerStart;
use Raylin666\Server\SwooleEvent;
use Raylin666\Server\Contract\ServerInterface;

return [
    'mode' => SWOOLE_PROCESS,
    'servers' => [
        [
            'name' => 'http',
            'type' => ServerInterface::SERVER_HTTP,
            'host' => '0.0.0.0',
            'port' => 9901,
            'sock_type' => SWOOLE_SOCK_TCP,
            'callbacks' => [
                SwooleEvent::ON_REQUEST => OnRequest::class,
            ],
        ],
        /*[
            'name' => 'websocket',
            'type' => ServerInterface::SERVER_WEBSOCKET,
            'host' => '0.0.0.0',
            'port' => 9902,
            'sock_type' => SWOOLE_SOCK_TCP,
            'callbacks' => [
            ],
        ],
        [
            'name' => 'base',
            'type' => ServerInterface::SERVER_BASE,
            'host' => '0.0.0.0',
            'port' => 9903,
            'sock_type' => SWOOLE_SOCK_TCP,
            'callbacks' => [
                SwooleEvent::ON_RECEIVE => \App\SwooleEvents\OnReceive::class
            ],
        ],*/
    ],
    'settings' => [
        'enable_coroutine' => true,
        'worker_num' => swoole_cpu_num(),
        'pid_file' => sprintf('%s/runtime/%s.pid', app()->path(), app()->name()),
        'log_level' => SWOOLE_LOG_NONE,
        'open_tcp_nodelay' => true,
        'max_coroutine' => 100000,
        'open_http2_protocol' => true,
        'max_request' => 100000,
        'socket_buffer_size' => 2 * 1024 * 1024,
        'buffer_output_size' => 2 * 1024 * 1024,
        'daemonize' => false,
    ],
    'callbacks' => [
        SwooleEvent::ON_WORKER_START => OnWorkerStart::class
    ],
];