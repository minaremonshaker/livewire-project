<?php

namespace App\Livewire\Components\Admin\Projects;

use App\Models\Project;
use App\Traits\WithFeatures;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination , WithFeatures;

    public string $term;

    public function mount(){

        $this->term = '';

    }

    public function updating(){

        $this->resetPage();
        
    }

    public function render()
    {
        return view('components.admin.projects.index',[
            'projects' => Project::forage($this->term)
        ]);

    }
}
