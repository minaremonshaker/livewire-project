<?php

namespace App\Livewire\Forms\skills;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateSkill extends Form
{
    #[Validate('required')]
    public string $name;

    #[Validate('required|numeric|lte:100|gt:0')]
    public string $progress;


}
