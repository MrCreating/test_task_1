<?php

namespace test\services;

class Mailer extends \AbstractService
{
    // code....

    /**
     * @return void
     */
    public function getAPI(): mixed
    {
        // return mailer path in the system or Mailer object
    }

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function callMethod(string $method, array $params = []): mixed
    {
        // send mail logic
    }

    /**
     * @param string $to
     * @param string $text
     * @return mixed
     */
    public function sendMail (string $to, string $text)
    {
        return $this->callMethod('send', [
           'to' => $to,
           'message' => $text
        ]);
    }

    // code....
}