<?php

namespace App\Livewire\Components\Admin;

use App\Livewire\Forms\admin\LoginForm;
use Livewire\Component;

class Login extends Component
{

    public LoginForm $form;

    public function login(){

        $this->form->authenticate();
        return to_route('admin.dashboard');
    }


    public function render()
    {
        return view('components.admin.login');
    }
}
