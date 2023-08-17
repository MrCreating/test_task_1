<?php

namespace test;

class CacheClient extends BaseObject
{
    /**
     * @param string $key
     * @return mixed
     */
    public function getValue (string $key): mixed
    {
        return '';
    }

    /**
     * @param string $key
     * @param string $value
     * @return mixed
     */
    public function setValue (string $key, string $value, int $lifeTime = 86400): mixed
    {
        return '';
    }

    /**
     * @return CacheClient
     */
    public static function get (): CacheClient
    {
        static $client;
        if (!isset($client)) {
            $client = new static();
        }

        return $client;
    }
}