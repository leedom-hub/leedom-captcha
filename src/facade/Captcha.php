<?php

namespace leedom\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package leedom\captcha\facade
 * @mixin \leedom\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\captcha\Captcha::class;
    }
}
