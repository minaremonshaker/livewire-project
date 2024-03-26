<?php

namespace App\Livewire\Components\Admin;

use App\Livewire\Forms\admin\SettingsUpdateForm;
use App\Models\Local;
use App\Wireable\Admin\Settings;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SettingsUpdate extends Component
{

    public SettingsUpdateForm $settingsForm;

    public function update(){
        $this->settingsForm->updateSettings();
        session()->flash('message','you settings has been updated successfully');
    }

    public function render()
    {
        return view('components.admin.settings-update');
    }
}
