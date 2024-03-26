<?php

namespace App\Livewire\Components\Admin\Counters;

use App\Models\Counters;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Update extends Component
{
    #[Validate('required|string')]
    public $name;

    #[Validate('required|numeric')]
    public $count;

    #[Validate('required')]
    public $icon;

    #[Locked]
    public $counter;

    #[On('edit')]
    public function edit($id){
        $this->counter = Counters::find($id);
        $this->fill($this->counter);
        $this->dispatch('editClose');
    }

    #[On('close')]
    public function close(){
        $this->resetValidation();
    }

    public function store(){
        $validatedData = $this->validate();
        $this->counter->update($validatedData);
        $this->dispatch('editClose');
        $this->dispatch('refresh');

    }
    public function render()
    {
        return view('.components.admin.counters.update');
    }
}
