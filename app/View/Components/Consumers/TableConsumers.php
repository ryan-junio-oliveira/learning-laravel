<?php

namespace App\View\Components\Consumers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableConsumers extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.consumers.table-consumers');
    }
}
