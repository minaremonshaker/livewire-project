<?php

namespace App\Livewire\Components\Admin\Skills;

use App\Models\Skills;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    #[Locked]
    public $skills;

    #[On('delete')]
    public function delete($id){

        $this->skills = Skills::find($id);

        $this->dispatch('DeleteModal');

    }

    public function store(){
        $this->skills->delete();

        $this->dispatch('DeleteModal');
        
        $this->dispatch('refresh');

    }

    public function render()
    {
        return view('components.admin.skills.delete');
    }
}
