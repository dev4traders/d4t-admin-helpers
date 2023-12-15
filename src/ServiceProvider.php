<?php

namespace D4T\Admin\Helpers;

use Dcat\Admin\Admin;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::ADDON;
    }

    public function settingForm()
    {
        return new Setting($this);
    }

    public function init()
    {
        parent::init();

        $this->loadConfig();
    }

    public function loadConfig(){
        $this->publishes([
            __DIR__.'/../config/helpers.php' => config_path('helpers.php')
        ], 'config');
    }

}
