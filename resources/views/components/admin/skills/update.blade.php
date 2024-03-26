
@php
    $hasClose = true;
    $hasSubmit = true;
@endphp
<x-admin-modal id="editSkills" title="Edit Skills" method="store">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nameExLarge" class="form-label">Name</label>
            <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name"  wire:model='name'/>
            <x-error property="name"/>
        </div>

        <div class="col-md-6 mb-0">
            <label for="emailExLarge" class="form-label">Email</label>
            <input type="text" id="emailExLarge" class="form-control" wire:model='progress' />
            <x-error property="progress"/>
        </div>
    </div>
</x-admin-modal>


