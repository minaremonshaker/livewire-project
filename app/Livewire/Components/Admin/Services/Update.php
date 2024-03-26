<?php

namespace App\Livewire\Components\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Update extends Component
{

    #[Locked]
    public $service;

    #[Validate('required|unique:services,name')]
    public string $name;

    #[Validate('required|max:100')]
    public string $excerpt;

    #[Validate('required')]
    public string $description;

    #[Validate('required')]
    public string $icon;

    #[On('edit')]
    public function edit($id){
        $this->service = Service::find($id);

        $this->fill($this->service);

        $this->dispatch('editClose');
    }

    public function store(){

        $validatedData = $this->validate();
        $this->service->update($validatedData);
        $this->dispatch('editClose');
        $this->dispatch('refresh');

    }


    #[On('close')]
    public function close(){
        $this->resetValidation();
        $this->reset();
    }
    public function render()
    {
        return view('components.admin.services.update');
    }
}
