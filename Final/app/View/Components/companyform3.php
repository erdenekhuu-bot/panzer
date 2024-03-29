<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class companyform3 extends Component
{
    public $name,$img,$role,$team;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$img,$role,$team)
    {
        $this->name=$name;
        $this->img=$img;
        $this->role=$role;
        $this->team=$team;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.companyform3');
    }
}
