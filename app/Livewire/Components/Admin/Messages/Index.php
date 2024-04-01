<?php

namespace App\Livewire\Components\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Services\MultiModelSearchService;

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
        $models = [Message::class];
        $option = [
            'query_by' => 'name',
        ];
        return view('components.admin.messages.index',['messages'=> Message::forage($this->term)]);
    }
}
