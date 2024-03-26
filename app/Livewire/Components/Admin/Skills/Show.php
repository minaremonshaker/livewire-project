<?php

namespace App\Livewire\Components\Admin\Skills;

use App\Models\Skills;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{

    public string $name;

    public int $progress;

    #[On('show')]
    public function show($id){
        $skills = Skills::find($id);
        $this->fill($skills->only('name','progress'));
        $this->dispatch('showModal');
    }

    public function render()
    {
        return view('components.admin.skills.show');
    }
}
