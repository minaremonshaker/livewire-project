<?php

namespace App\Livewire\Components\Admin\Messages;

use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public string $term;

    public function mount(){
        $this->term = '';
    }

    #[On('refresh')]
    public function pageRefresh(){
        $this->render();
    }

    public function render()
    {
        return view('components.admin.messages.index',['messages'=> Message::search($this->term)->paginate(4)]);
    }
}
