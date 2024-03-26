<?php

namespace App\Livewire\Components\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Delete extends Component
{
    use WithPagination;

    #[Locked]
    public $service;

    #[On('delete')]
    public function delete($id){
        $this->service = Service::find($id);
        $this->dispatch('DeleteModal');
    }

    public function store(){
        $this->service->delete();
        $this->dispatch('DeleteModal');
        $this->dispatch('refresh');
      
    }

    public function render()
    {
        return view('components.admin.services.delete');
    }
}
