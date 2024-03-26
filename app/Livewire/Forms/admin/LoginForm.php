<?php

namespace App\Livewire\Forms\admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required')]
    public string $password = '';

    #[Validate('nullable')]
    public bool $remember = false;

    public function authenticate(){

        $this->validate();

        if(!Auth::guard('admin')->attempt(['email'=>$this->email,'password'=>$this->password],$this->remember))
        {
            throw ValidationException::withMessages(['form.email'=> trans('auth.failed')]);
        }
        
        $this->reset(); 

    }
}
