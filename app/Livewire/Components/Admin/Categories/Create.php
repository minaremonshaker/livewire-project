<?php

namespace App\Livewire\Components\Admin\Categories;

use App\Models\Category;
use App\Traits\WithFeatures;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    use WithFeatures;

    #[Validate('required|string|unique:categories')]
    public string $name;

    public function create(){

        $this->dispatch('createClose');

    }

    public function store(){

        $validatedData = $this->validate();

        Category::create($validatedData);

        $this->dispatch('createClose');

        $this->reset();

        $this->dispatch('refresh');

    }

    public function render()
    {
        return view('components.admin.categories.create');
    }
}
