<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\imagenes;
class Image extends Component
{
    /**
     * Create a new component instance.
     */
    public $imagenes;
    public function __construct()
    {
        //
        $this->imagenes = imagenes::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.image');
    }
}
