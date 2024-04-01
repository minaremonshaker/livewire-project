<?php

namespace App\Livewire\Components\Admin\Categories;

use App\Models\Category;
use App\Traits\WithFeatures;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination , WithFeatures;
    
    public string $term;


    public function updating(){
        $this->resetPage();
    }


    public function mount(){
        $this->term = '';
    }

    public function render()
    {
        return view('components.admin.categories.index',['categories'=> Category::forage($this->term) ]);
    }
}
