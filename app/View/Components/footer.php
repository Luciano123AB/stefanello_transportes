<?php

namespace App\View\Components;

use App\Models\Data;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{

    public $data_admin;
    public $email_admin;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->data_admin = Data::first();
        $this->email_admin = User::where('role', 'admin')->first()->email;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
