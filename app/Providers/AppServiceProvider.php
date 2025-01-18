<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\View\Components\layouts\Header;
use App\View\Components\layouts\Layout;
use App\View\Components\layouts\Navbar;
use Illuminate\Support\ServiceProvider;
use App\View\Components\layouts\Sidebar;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        Blade::component('layout', Layout::class);
        Blade::component('sidebar', Sidebar::class);
        Blade::component('sidebar', Navbar::class);
        Blade::component('header', Header::class);
    }
}
