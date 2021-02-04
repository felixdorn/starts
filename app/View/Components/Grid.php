<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Grid extends Component
{
    public int $rows;
    public int $cols;

    public function __construct(int $rows = 1, int $cols = 1)
    {
        $this->rows =  $rows;
        $this->cols = $cols;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.grid');
    }
}
