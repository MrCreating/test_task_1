<?php

namespace test\components;

use test\EloquentModel;

/**
 * @property int $id
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $phone
 * @property string $telegram
 */
class User extends EloquentModel
{
    function table(): string
    {
        return 'user';
    }
}