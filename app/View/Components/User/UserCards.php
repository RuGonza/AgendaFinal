<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
class UserCards extends Component
{
    /**
     * Create a new component instance.
     */
    
    public $userall;

    public function __construct()
    {
        //
        $this->userall  = User::with('roles')->whereNotIn('id', [1,300])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.user-cards');
    }
}
