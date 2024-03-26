<?php

namespace App\Livewire\Components\Admin\Skills;

use App\Livewire\Forms\skills\CreateSkill;
use App\Models\Skills;
use Livewire\Attributes\Js;
use Livewire\Component;

class Create extends Component
{

    public CreateSkill $form;

    public function store()
    {

        $data = $this->validate();

        Skills::create($data);

        $this->dispatch('createClose');

        $this->dispatch('refresh');

        $this->reset(['form.name', 'form.progress']);


    }

    public function render()
    {
        return view('components.admin.skills.create');
    }
}
