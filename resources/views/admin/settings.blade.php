<x-app-layout>

    <x-slot:title>
        Settings
    </x-slot:title>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Settings</h4>

        <div class="card mb-4">
            <div class="card-body container">
                <livewire:components.admin.settings.create/>
            </div>
          </div>
    </div>
    



</x-app-layout>