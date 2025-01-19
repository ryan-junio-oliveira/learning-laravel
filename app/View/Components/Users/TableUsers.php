<?php

namespace App\View\Components\Users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableUsers extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.users.table-users');
    }
}
