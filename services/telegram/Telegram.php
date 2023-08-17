<?php

namespace test\services;

class Telegram extends \AbstractService
{
    public function getAPI(): mixed
    {
        // get telegram api url
    }

    public function callMethod(string $method, array $params = []): mixed
    {
        // send http request to telegram
        return true;
    }

    public function sendMessage (int $userId, string $text): bool
    {
        $token = $this->getOption('access_token');

        return $this->callMethod('sendMessage', [
            'userId' => $userId,
            'text' => $text,
            'token' => $token
        ]);
    }
}