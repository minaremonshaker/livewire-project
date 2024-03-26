<?php

namespace App\Livewire\Components\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout(){
        
        Auth::guard('admin')->logout();

        session()->invalidate();

        session()->regenerate(true);

        $this->redirectRoute('admin.create');

    }

    public function render()
    {
        return view('components.admin.logout');
    }
}
