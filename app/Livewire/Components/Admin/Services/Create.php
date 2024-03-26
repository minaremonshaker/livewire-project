<?php

namespace App\Livewire\Components\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|unique:services,name')]
    public string $name;

    #[Validate('required|max:100')]
    public string $excerpt;

    #[Validate('required')]
    public string $description;

    #[Validate('required')]
    public string $icon;

    
    public function store(){
        $validatedData = $this->validate();
        Service::create($validatedData);
        $this->reset();
        $this->dispatch('createClose');
        $this->dispatch('refresh');

    }

    #[On('close')]
    public function close(){
        $this->resetValidation();
        $this->reset();
    }

    public function render()
    {
        return view('components.admin.services.create');
    }
}
