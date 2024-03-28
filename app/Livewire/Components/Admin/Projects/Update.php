<?php

namespace App\Livewire\Components\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use App\Traits\WithFeatures;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    use WithFileUploads , WithFeatures;

    #[Validate('required')]
    public string $name;

    #[Validate('required|url')]
    public string $link;

    #[Validate('image|mimes:png,jpg|extensions:png,jpg|max:2000|nullable')]
    public $image;

    #[Validate('required', 'category')]
    public int $category_id;

    #[Validate('required')]
    public string $description;

    #[Locked]
    public $Categories;

    #[Locked]
    public $projects;

    public function mount(){
        $this->Categories = Category::all();
    }

    #[On('edit')]
    public function edit($id)
    {
        $this->projects = Project::find($id);
    
        $this->fill([
            'name' => $this->projects->name,
            'link' => $this->projects->link,
            'description' => $this->projects->description,
            'category_id' => $this->projects->category_id,
        ]);

        $this->image = $this->projects->image;

        $this->dispatch('editClose');
    }

    public function store(){

        $validatedData = $this->validate();
        
        if(File::exists($this->projects->image)){

            File::delete($this->projects->image);

            $fileName = time() . '.' . $this->image->extension();

            $savedFile = $this->image->storeAs('/image',$fileName);
    
            $validatedData['image'] = $savedFile;

          
        }
        else
        {
            unset($validatedData['image']);
        }

        $this->projects->update($validatedData);

        $this->dispatch('editClose');

        $this->dispatch('refresh');
       
    }

    public function render()
    {
        return view('components.admin.projects.update');
    }
}
