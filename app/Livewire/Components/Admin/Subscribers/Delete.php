<?php

namespace App\Livewire\Components\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    #[Locked]
    public $subscriber;

    #[On('delete')]
    public function delete($id){
       $this->subscriber = Subscriber::find($id);
       $this->dispatch('DeleteModal');
    }

    public function store(){
        $this->subscriber->delete();
        $this->dispatch('DeleteModal');
        $this->dispatch('refresh');

    }
    public function render()
    {
        return view('components.admin.subscribers.delete');
    }
}
