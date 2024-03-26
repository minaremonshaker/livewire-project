<?php

namespace App\Livewire\Components\Admin\Counters;

use App\Models\Counters;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    
    public string $term = '';

    #[On('refresh')]
    public function pageRefresh(){
        $this->render();
    }

    public function render()
    {
        return view('components.admin.counters.index',
        [
            'counters' => Counters::search($this->term)->paginate(3)
        ]);
    }
}
