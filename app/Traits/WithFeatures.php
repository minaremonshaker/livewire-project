<?php

namespace App\Traits;

use Livewire\Attributes\On;


trait WithFeatures{

    public function store(){}

    public function create(){}

    public function edit($id){}

    public function delete($id){}

    public function show(){}


    #[On('close')]
    public function close(){

        $this->resetValidation();

    }

    #[On('refresh')]
    public function pageRefresh(){

        $this->render();

    }


}
