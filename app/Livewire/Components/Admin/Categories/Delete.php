<?php

namespace App\Livewire\Components\Admin\Categories;

use App\Models\Category;
use App\Traits\WithFeatures;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    use WithFeatures;

    #[Locked]
    public $category;


    #[On('delete')]
    public function delete($id)
    {
        $this->category = Category::find($id);

        $this->dispatch('DeleteModal');
    }

    public function store()
    {
        $this->category->delete();

        $this->dispatch('DeleteModal');

        $this->dispatch('refresh');
        
    }

    public function render()
    {
        return view('components.admin.categories.delete');
    }
}
