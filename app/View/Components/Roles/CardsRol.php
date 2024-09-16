<?php

namespace App\View\Components\Roles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Roles;

class CardsRol extends Component
{
    /**
     * Create a new component instance.
     */
    public $rol;
    public function __construct()
    {
        //
        $this->rol = Roles::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.roles.cards-rol');
    }
}
