<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;
use InvalidArgumentException;

class Secondary extends Component
{
    public ?string $content;
    public ?string $icon;
    public string $type;
    public string $iconSide;
    public string $iconSet;
    public string $color;

    public function __construct(string $color, string $content = null, string $type = 'submit', string $icon = null, string $iconSide = 'left', string $iconSet = 'heroicon')
    {
        if (!in_array($iconSide, ['left', 'right'])) {
            throw new InvalidArgumentException("Icon side must be either right or left, [$iconSide] given");
        }

        if (!in_array($type, ['button', 'submit', 'reset'])) {
            throw new InvalidArgumentException('Button type must be button, submit or reset, [$type] given');
        }

        $this->content = $content;
        $this->type = $type;
        $this->icon = $icon;
        $this->iconSide = $iconSide;
        $this->iconSet = $iconSet;
        $this->color = $color;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.buttons.secondary');
    }
}
