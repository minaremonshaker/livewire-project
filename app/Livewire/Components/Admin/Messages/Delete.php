<?php

namespace App\Livewire\Components\Admin\Messages;

use App\Models\Message;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\Attributes\On;

class Delete extends Component
{
    #[Locked]
    public $message;

    #[On('delete')]
    public function delete($id){
        $this->message = Message::find($id);
        $this->dispatch('DeleteModal');
    }

    public function store(){
        $this->message->delete();
        $this->dispatch('refresh');
        $this->dispatch('DeleteModal');
        
    }

    public function render()
    {
        return view('components.admin.messages.delete');
    }
}
