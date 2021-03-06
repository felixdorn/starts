<?php

namespace App\View\Components\Button;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $color;
    public string $icon;
    public string $type;
    public string $iconSet;

    public function __construct(string $icon, string $color = null, string $type = 'submit', string $iconSet = 'heroicon')
    {
        $this->color   = $color ?? settings('color');
        $this->icon    = $icon;
        $this->type    = $type;
        $this->iconSet = $iconSet;
    }

    public function render()
    {
        return view('components.button.icon');
    }
}
