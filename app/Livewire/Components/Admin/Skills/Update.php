<?php

namespace App\Livewire\Components\Admin\Skills;

use App\Models\Skills;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Update extends Component
{

    #[Validate('required')]
    public string $name;

    #[Validate('required')]
    public int $progress;

    #[Locked]
    public $skills;

    #[On('edit')]
    public function edit(int $id){
        $this->skills = Skills::find($id);
        $this->fill($this->skills);
        $this->dispatch('editClose');
        $this->resetValidation();
    }

    public function store(){
        $validatedData = $this->validate();
        $this->skills->update($validatedData);
        $this->dispatch('editClose');
        $this->dispatch('refresh');   
    }
    public function render()
    {
        return view('components.admin.skills.update');
    }
}
