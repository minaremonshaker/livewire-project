<?php

namespace App\Livewire\Forms\admin;

use App\Models\Local;
use App\Wireable\Admin\Settings;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SettingsUpdateForm extends Form
{

    #[Validate('required')]
    public string $name;

    #[Validate('required')]
    public string $address;

    #[Validate('required|email')]
    public string $email;

    #[Validate('required')]
    public int $phone;

    #[Validate('nullable|url')]
    public string $facebook;

    #[Validate('nullable|url')]
    public string $twitter;

    #[Validate('nullable|url')]
    public string $linkedin;
    
    #[Validate('nullable|url')]
    public string $instagram;


    public function updateSettings(){
         $this->validate();
         Local::where('id', 1)->update($this->all());
    }

}
