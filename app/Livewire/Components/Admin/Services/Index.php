<?php

namespace App\Livewire\Components\Admin\Services;

use App\Models\Service;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $term = '';


    #[On('refresh')]
    public function pageRefresh()
    {
       $this->resetPage();
       $this->render();
    }

    public function render()
    {
        return view(
            'components.admin.services.index',
            ['services' => Service::search($this->term)->latest()->paginate(3)]
        );
    }
}
