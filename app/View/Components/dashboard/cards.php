<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
use App\Models\Roles;
use App\Models\eventos;
use Carbon\Carbon;

class cards extends Component
{
    /**
     * Create a new component instance.
     */
    public $usuarios;
    public $roles;
    public $event;

    public function __construct()
    {
        //
        $this->usuarios =  User::with('roles')
        ->whereNotIn('id', [1, 300])
        ->count();
        $this->roles = Roles::all()->count();
        $this->event = eventos::whereDate('fecha', Carbon::today())->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.cards');
    }
}
