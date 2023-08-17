<?php

namespace test\modules\validators;

use test\helpers\ValidationHelper;
use test\O;
use test\services\Mailer;
use test\services\SMS;
use test\services\Telegram;

class ValidationController extends \test\Controller
{
    // $type is got from client-side.
    public function sendValidationMessage (string $type)
    {
        if (ValidationHelper::isTimeToSend(O::$userId)) {
            $code = ValidationHelper::getValidationCode(O::$userId);
            $messageText = 'Validation code is ' . $code;

            if ($type == 'sms') {
                SMS::get([])->sendMessage(O::$user->phone, $messageText);
            }
            if ($type == 'tg') {
                Telegram::get([])->sendMessage(O::$user->telegram, $messageText);
            }
            if ($type == 'email') {
                Mailer::get([])->sendMail(O::$user->email, $messageText);
            }
        }

        return $this->render('response');
    }
}