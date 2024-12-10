<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color;
    public string $text;
    public function __construct(
        public string $href,
        public string $type
    )
    {
        [$this->color, $this->text] = match ($this->type) {
            'create' => ['primary', __('keywords.add_new')],
            'edit' => ['success', "<i class='fe fe-2x fe-edit'></i>"],
            'show' => ['warning', "<i class='fe fe-2x fe-eye'></i>"],
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
