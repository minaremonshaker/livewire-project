<?php

namespace App\Livewire\Components\Admin\Counters;

use App\Models\Counters;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    #[Validate('required|string')]
    public string $name;

    #[Validate('required|numeric')]
    public string $count;

    #[Validate('required|string')]
    public string $icon;


    #[On('close')]
    public function removeValidation(){
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        Counters::create([
            'name' => $this->name,
            'count' => $this->count,
            'icon' => $this->icon,
        ]);

        $this->reset();
        $this->dispatch('createClose');
        $this->dispatch('refresh');
    }
    public function render()
    {
        return view('.components.admin.counters.create');
    }
}
