<?php

namespace App\Livewire\Components\Admin;

use App\Models\Admin;
use App\Traits\WithFeatures;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadProfilePicture extends Component
{
    use WithFileUploads , WithFeatures;

    #[Validate('required|image|')]
    public ?UploadedFile $image = null;



    public function store()
    {
        $admin = Admin::find(auth('admin')->user()->id);

        $this->validate();

        Storage::delete($admin->image);

        $fileName = Carbon::parse(now()) . '.' . $this->image->getClientOriginalExtension();

        $imagePath = $this->image->storeAs('image/profile',$fileName);

        $admin->image = $imagePath;

        $admin->save(); 

        $this->dispatch('refresh')->to(ProfilePicture::class);

        
    }

    public function render()
    {
        return view('components.admin.upload-profile-picture');
    }
}
