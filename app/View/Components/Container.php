<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Container extends Component
{
    public string $maxWidth;

    /**
     * Create a new component instance.
     *
     * @param string $maxWidth
     */
    public function __construct(string $maxWidth = '7xl')
    {
        $this->maxWidth = $maxWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.container');
    }
}