<?php

namespace App\Livewire\Components\Admin;

use App\Models\Admin;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class ProfilePicture extends Component
{
 
    #[On('refresh')]
    public function refresh()
    {
        $this->render();
    }


    public function render()
    {
        return view('components.admin.profile-picture',[
            'picture' => Admin::find(auth('admin')->user()->id)->image
        ]);
    }
}
