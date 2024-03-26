<x-app-layout>
    <x-slot:title>
        Messages
    </x-slot:title>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h4 class="fw-bold py-3 mb-4 col-md-11"><span class="text-muted fw-light"></span>Messages</h4>
        </div>
        <div class="card mb-4">
            <livewire:components.admin.messages.index/>
        </div>
    </div>
</x-app-layout>
