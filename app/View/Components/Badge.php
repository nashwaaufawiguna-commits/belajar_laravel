<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public $color;
    public $text;
    public function __construct($color = 'primary', $text = ''){
        $this->color = $color;
        $this->text = $text;
    }
    public function badgeClass(){
        return 'bg-' . $this->color;
    }
    public function render(): View|Closure|string{
        return view('components.badge');
    }
}
