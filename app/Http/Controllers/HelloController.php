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

namespace App\Http\Controllers;

/**
 * Class HelloController
 * @package App\Http\Controllers
 */
class HelloController extends Controller
{
    /**
     * @return \Raylin666\Http\Message\Response|\Raylin666\Http\Response
     */
    public function index()
    {
        return $this->response->RESTfulAPI(
            'Hello world!'
        );
    }
}