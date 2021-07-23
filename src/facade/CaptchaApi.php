<?php

namespace leedom\captcha\facade;

use think\Facade;

/**
 * Class CaptchaApi
 * @package leedom\captcha\facade
 * @mixin \leedom\captcha\CaptchaApi
 */
class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \leedom\captcha\CaptchaApi::class;
    }
}
