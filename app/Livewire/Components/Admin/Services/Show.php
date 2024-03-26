<?php

namespace App\Livewire\Components\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{


    public string $name;

    public string $excerpt;

    public string $description;

    public string $icon;

    #[On('show')]
    public function show($id){
        $service = Service::find($id);
        $this->fill($service);
        $this->dispatch('showModal');
    }
    public function render()
    {
        return view('components.admin.services.show');
    }
}
