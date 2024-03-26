<?php

namespace App\Livewire\Components\Admin\Skills;

use App\Models\Skills;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $term = '';

    public function updating(){
        $this->resetPage();
    }

    #[On('refresh')]
    public function pageRefresh(){
        $this->render();
    }

    public function render()
    {
        return view('components.admin.skills.index',
                [
                    'skills'=> Skills::search($this->term)->latest()->paginate(10),
                ]);
    }
}
