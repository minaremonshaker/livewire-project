<?php

namespace App\Livewire\Components\Admin\Categories;

use App\Models\Category;
use App\Traits\WithFeatures;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class Update extends Component
{
    use WithPagination , WithFeatures;


    #[Validate('required|string|unique:categories')]
    public string $name;

    #[Locked]
    public $categories;

    #[On('edit')]
    public function edit(int $id)
    {
        $this->categories = Category::find($id);

        $this->fill($this->categories);

        $this->dispatch('editClose');
    }

    public function store()
    {
        $validatedData = $this->validate();

        $this->categories->update($validatedData);

        $this->dispatch('editClose');

        $this->dispatch('refresh');
    }
    public function render()
    {
        return view('components.admin.categories.update');
    }
}
