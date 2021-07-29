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

use Raylin666\Framework\ServiceProvider\RouterServiceProvider;
use Raylin666\Framework\ServiceProvider\LoggerServiceProvider;
use Raylin666\Framework\ServiceProvider\ServerServiceProvider;
use Raylin666\Framework\ServiceProvider\ConsoleServiceProvider;
use Raylin666\Framework\ServiceProvider\EventListenerServiceProvider;
use Raylin666\Framework\ServiceProvider\ValidatorServiceProvider;
use Raylin666\Framework\ServiceProvider\DatabaseServiceProvider;

return [
    ConsoleServiceProvider::class,
    RouterServiceProvider::class,
    ServerServiceProvider::class,
    LoggerServiceProvider::class,
    EventListenerServiceProvider::class,
    ValidatorServiceProvider::class,
    DatabaseServiceProvider::class,
];