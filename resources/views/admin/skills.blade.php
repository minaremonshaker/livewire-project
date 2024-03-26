<x-app-layout>
    <x-slot:title>
        skills
    </x-slot:title>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold py-3 mb-4 col-md-11"><span class="text-muted fw-light"></span>Skills</h4>
            <div class="col-md-1 text-center mt-3">
                <livewire:components.admin.skills.create/>
                <button type="button" class="btn  btn-primary " data-bs-toggle="modal" data-bs-target="#createModal">
                    Add
                </button>
                
            </div>
        </div>
        <div class="card mb-4">
            <livewire:components.admin.skills.index/>
        </div>
    </div>

    <livewire:components.admin.skills.update/>
    <livewire:components.admin.skills.delete/>
    <livewire:components.admin.skills.show>

</x-app-layout>