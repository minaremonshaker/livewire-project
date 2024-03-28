<?php

namespace App\Livewire\Components\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\On;
use App\Traits\WithFeatures;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Locked;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\File;
use Barryvdh\Debugbar\Facades\Debugbar;

class Create extends Component
{
    use WithPagination, WithFeatures, WithFileUploads;

    #[Validate('required')]
    public string $name;

    #[Validate('required|url')]
    public string $link;

    #[Validate('required|image|mimes:png,jpg|extensions:png,jpg|max:2000')]
    public $image;

    #[Validate('required', 'category')]
    public int $category_id;

    #[Validate('required')]
    public string $description;

    #[Locked]
    public $Categories;

    public function mount()
    {
        $this->Categories = Category::all();
    }


    public function store()
    {
        $validatedData =  $this->validate();

        $fileName = time() . '.' . $this->image->extension();

        $savedFile = $this->image->storeAs('/image',$fileName);

        $validatedData['image'] = $savedFile;

        Project::create($validatedData);

        $this->dispatch('createClose');

        $this->resetExcept('Categories');
        
        $this->dispatch('refresh');
    }

    #[On('close')]
    public function close()
    {
        $this->resetValidation();
        $this->resetExcept('Categories');
    }

    public function render()
    {
        return view('components.admin.projects.create');
    }
}
