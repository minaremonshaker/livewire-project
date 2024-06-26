<?php

namespace App\Livewire\Components\Admin;

use App\Models\Category;
use App\Models\Message;
use App\Models\Project;
use App\Services\MultiModelSearchService;
use Barryvdh\Debugbar\Facades\Debugbar;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class GlobalSearch extends Component
{

    use WithPagination;

    #[Url()]
    public string $term = '';

    public function show(string $name){

        $searchedModels  = [
            Category::class,
            Project::class,
            Message::class,
        ];
        
        $searchOptions = [
            'query_by' => 'name'
        ];

        $result = MultiModelSearchService::search($searchedModels, $this->term, $searchOptions, 3);
        
        $this->redirectRoute('admin.search',['results' => $result]);
    }

    public function render()
    {
        $searchedModels  = [
            Category::class,
            Project::class,
            Message::class,
        ];
        
        $searchOptions = [
            'query_by' => 'name'
        ];

        $result = MultiModelSearchService::search($searchedModels, $this->term, $searchOptions, 3);


        return view('components.admin.global-search', [
            'results' =>  $result
        ]);
    }
}
