<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $errorMsg;
    public $label;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$name,$placeholder,$errorMsg,$label)
    {
        $this->type=$type;
    $this->name=$name;
    $this->placeholder=$placeholder;
    $this->errorMsg=$errorMsg;
    $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
