<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    /**
     * Create a new component instance.
     */
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function render()
    {
        return view('components.pagination');
    }
}
