<?php

namespace App\Livewire\Components\Admin\Projects;

use App\Models\Project;
use App\Traits\WithFeatures;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    use WithFeatures;

    #[Locked]
    public $project;

    #[On('delete')]
    public function delete($id)
    {
        $this->project = Project::find($id);

        $this->dispatch('DeleteModal');

    }


    public function store()
    {
        Storage::delete($this->project->image);

        $this->project->delete();

        $this->dispatch('refresh');

        $this->dispatch('DeleteModal');

    }


    public function render()
    {
        return view('components.admin.projects.delete');
    }
}
