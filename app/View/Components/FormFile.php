<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormFile extends Component
{
    public string $label;
    public string $name;
    public ?string $accept;
    public ?string $current;
    /**
     * Create a new component instance.
     */
    public function __construct(string $label, string $name, string $accept = null, string $current = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->accept = $accept;
        $this->current = $current;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-file');
    }
}
