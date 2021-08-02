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

namespace App\Helper;

use Throwable;

/**
 * Class SwooleHelper
 * @package App\Helper
 */
class SwooleHelper extends Helper
{
    /**
     * 协程处理
     * @param callable $closure
     * @param          ...$arguments
     */
    protected function go(callable $closure, ...$arguments)
    {
        go(function ($closure, ...$arguments) {
            try {
                $closure(...$arguments);
            } catch (Throwable $e) {
                logger()->error($e->getMessage(), ['code' => $e->getCode(), 'file' => $e->getFile(), 'line' => $e->getLine()]);
            }
        }, $closure, ...$arguments);
    }
}