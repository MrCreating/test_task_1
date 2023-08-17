<?php

namespace test\services;

class SMS extends \AbstractService
{
    // code....

    /**
     * @return mixed
     */
    public function getAPI(): mixed
    {
        // get sms API url or custom lib client for this
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function callMethod(string $method, array $params = []): mixed
    {
        // call custom sms sender method
    }

    public function sendMessage (string $phone, string $text): bool
    {
        return $this->callMethod('send', [
            'to' => $phone,
            'text' => $text
        ]);
    }

    // code....
}