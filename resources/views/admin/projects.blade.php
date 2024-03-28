<x-app-layout>
    <x-slot:title>
        Projects
    </x-slot:title>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold py-3 mb-4 col-md-11"><span class="text-muted fw-light"></span>Projects</h4>
            <div class="col-md-1 text-center mt-3">

                <livewire:components.admin.projects.create/>
                <button type="button" class="btn  btn-primary " data-bs-toggle="modal" data-bs-target="#createModal">
                    Add
                </button>

            </div>  
        </div>
        <div class="card mb-4">
            <livewire:components.admin.Projects.index />
        </div>
    </div>
</x-app-layout>
