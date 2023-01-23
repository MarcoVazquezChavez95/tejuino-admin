<?php

namespace Tejuino\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->registerAliases();
        $this->registerBlade();
    }

    private function registerAliases()
    {
        // Get Alias Loader singleton
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();

        // Create helper aliases
        $loader->alias('Files', Helpers\Files::class);
        $loader->alias('Plugins', Helpers\Plugins::class);
        $loader->alias('Assets', Helpers\Assets::class);

        // Create controller aliases
        $loader->alias('AdminController', Controllers\AdminController::class);
        $loader->alias('CrudController', Controllers\CrudController::class);

        // Traits
        $loader->alias('HasHash', Traits\HasHash::class);
        $loader->alias('HasFiles', Traits\HasFiles::class);
        $loader->alias('HasHistory', Traits\HasHistory::class);

    }

    private function registerBlade()
    {
        \Blade::component('admin.base.components.modal');
        \Blade::component('admin.base.components.panel');
    }

}
