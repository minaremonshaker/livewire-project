<?php

namespace App\Livewire\Components\Admin\Counters;

use App\Models\Counters;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    #[Locked]
    public $counter;

    #[On('delete')]
    public function delete($id){
        $this->counter = Counters::find($id);
        $this->dispatch('DeleteModal');
    }

    public function store(){
        $this->counter->delete();
        $this->dispatch('DeleteModal');
        $this->dispatch('refresh');
    }
    public function render()
    {
        return view('.components.admin.counters.delete');
    }
}
