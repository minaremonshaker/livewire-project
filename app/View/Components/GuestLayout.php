<?php

namespace App\View\Components;

use App\Models\Local;
use App\Models\Skills;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest',['settings'=> Local::first()]);
    }
}
