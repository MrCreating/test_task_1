<?php

namespace test\helpers;

use test\CacheClient;
use test\O;

class ValidationHelper
{
    public static function isTimeToSend (int $userId): bool
    {
        $lastTime = CacheClient::get()->getValue('sms.' . O::$userId . '.time');
        $currTime = time();

        return $lastTime && $lastTime > $currTime;
    }

    public static function createValidationCode (int $userId): int
    {
        $code = rand(111111, 999999);

        CacheClient::get()->setValue('sms.' . O::$userId . '.code', 300);
        CacheClient::get()->setValue('sms' . O::$userId . '.time', time() + 300);

        return $code;
    }

    public static function getValidationCode (int $userId): int
    {
        $code = CacheClient::get()->getValue('sms.' . O::$userId . '.code');

        if (!$code) {
            $code = self::createValidationCode($userId);
        }

        return $code;
    }
}