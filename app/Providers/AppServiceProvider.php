<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Blade::component('components.layouts.layout', 'layout');
        Blade::component('components.layouts.sidebar', 'sidebar');
        Blade::component('components.layouts.navbar', 'navbar');
        Blade::component('components.layouts.header', 'header');
        Blade::component('components.consumers.table-consumers', 'table-consumers');
        Blade::component('components.users.table-users', 'table-users');
    }
}
