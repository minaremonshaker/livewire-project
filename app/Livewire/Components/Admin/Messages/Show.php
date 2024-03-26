<?php

namespace App\Livewire\Components\Admin\Messages;

use App\Models\Message;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{

    public string $message;

    #[On('show')]
    public function show($id) {
        $message =  Message::find($id);
        $this->dispatch('showModal');
        $this->fill($message->only('message'));
        $message->update(['status' => 1]);
        $this->dispatch('refresh');
        Debugbar::info($message->update(['status' => 1]));
    }
    public function render()
    {
        return view('components.admin.messages.show');
    }
}
