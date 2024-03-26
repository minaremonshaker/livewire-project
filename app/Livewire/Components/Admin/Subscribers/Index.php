<?php

namespace App\Livewire\Components\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $term = '';

    // public function updating(){
    //     $this->resetPage();
    // }

    #[On('refresh')]
    public function pageRefresh(){
        $this->render();
    }

    public function render()
    {
        return view('components.admin.subscribers.index',
                [
                    'subscribers'=> Subscriber::search($this->term)->latest()->paginate(10),
                ]);
    }
}
