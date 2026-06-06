<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $variant;
    public $size;
    public $text;
    public $href;
    public $type;
    public function __construct($variant = 'primary', $size = 'md', $text = '', $href = null, $type = 'button'){
        $this->variant = $variant;
        $this->size = $size;
        $this->text = $text;
        $this->href = $href;
        $this->type = $type;
    }
    public function buttonClass(){
        $classes = 'btn btn-' . $this->variant;

        if ($this->size === 'sm') {
            $classes .= ' btn-sm';
        } elseif ($this->size === 'lg') {
            $classes .= ' btn-lg';
        }

        return $classes;
    }
    public function render(): View|Closure|string{
        return view('components.button');
    }
}
