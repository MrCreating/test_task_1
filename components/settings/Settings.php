<?php

namespace test\components;

use test\CacheClient;

/**
 * @property int $id
 * @property int $oneSettingField
 * @property string $secondSettingField
 * @property bool $thirdSettingField
 * @property User $user
 */
class Settings extends \test\EloquentModel
{
    /**
     * @var array
     */
    protected array $requiredValidationSettings = [];

    /**
     * Checking setting existance in the account or project
     * @param string $setting
     * @return bool
     */
    public function settingExists (string $setting): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function table (): string
    {
        return 'user_settings';
    }

    /**
     * In this context requires validation by contacting
     */
    public function requiresContactValidation(string $settingName): bool
    {
        // you can use Cache to save current setting name and validation time
        $validationValue = CacheClient::get()->getValue($settingName);
        if (!$validationValue && in_array($settingName, $this->requiredValidationSettings)) {
            return true;
        }

        return false;
    }

    /**
     * @param string $value
     * @return mixed
     */
    public function get (string $value): mixed
    {}
}