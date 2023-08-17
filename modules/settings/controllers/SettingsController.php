<?php

namespace test\modules\settings;

use test\components\Settings;
use test\Controller;
use test\O;

class SettingsController extends Controller
{
    // action for change setting
    public function changeSetting (string $setting)
    {
        /**
         * @var $settings Settings
         * this comment is needed for IDE, polymorphic call.
         */
        $settings = Settings::findOne(O::$userId);

        if (!$settings || !$settings->settingExists($setting)) {
            return $this->render('404');
        }

        if ($settings->requiresContactValidation($setting)) {
            return $this->render('contactValidationForm', [
                'settingName' => $setting,
                'model' => $settings
            ]);
        }

        return $this->render('settings', [
            'settings' => $settings
        ]);
    }
}