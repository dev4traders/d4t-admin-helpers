<?php

namespace D4T\Admin\Helpers;

use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::ADDON;
    }

    const URL_HELPERS_SCAFFOLD = 'helpers/scaffold';
    const URL_HELPERS_ICONS = 'helpers/icons';

    const PERMISSION_HELPERS = 'mng.helpers';
    const PERMISSION_HELPERS_SCAFFOLD = 'mng.helpers_scaffold';
    const PERMISSION_HELPERS_ICONS = 'mng.helpers_icons';

    protected $menu = [
        [
            'title' => 'Helpers',
            'uri' => '/empty',
            'icon' => 'fa-folder-open',
            'permission_slug' => self::PERMISSION_HELPERS
        ],
        [
            'parent' => 'Helpers',
            'title' => 'Scaffold',
            'uri' => self::URL_HELPERS_SCAFFOLD,
            'icon' => 'fa-fw fa-inbox',
            'permission_slug' => self::PERMISSION_HELPERS_SCAFFOLD
        ],
        [
            'parent' => 'Helpers',
            'title' => 'Icons',
            'uri' => self::URL_HELPERS_ICONS,
            'icon' => 'fa-fw fa-inbox',
            'permission_slug' => self::PERMISSION_HELPERS_ICONS
        ],
    ];

    protected array $permissions = [
        [
            'slug' => self::PERMISSION_HELPERS,
            'name' => 'Manager Helpers',
            'path' => './empty',
        ],
        [
            'parent' => self::PERMISSION_HELPERS,
            'slug' => self::PERMISSION_HELPERS_SCAFFOLD,
            'name' => 'Manager Helpers Scaffold',
            'path' => self::URL_HELPERS_SCAFFOLD,
        ],
        [
            'parent' => self::PERMISSION_HELPERS,
            'slug' => self::PERMISSION_HELPERS_ICONS,
            'name' => 'Manager Helpers Icons',
            'path' => self::URL_HELPERS_ICONS,
        ],
    ];
    public function settingForm()
    {
        return new Setting($this);
    }

    public function init()
    {
        parent::init();

//        $this->loadConfig();
    }

    // public function loadConfig()
    // {
    //     // $this->publishes([
    //     //     __DIR__ . '/../config/helpers.php' => config_path('helpers.php')
    //     // ], 'config');
    // }
}
