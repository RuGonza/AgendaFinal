<?php

namespace App\View\Components\modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class modalCortes extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;
    public function __construct()
    {
       $this->user =  $this->userall  = User::with('roles')->whereNotIn('id', [1,300])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.modal-cortes');
    }
}
