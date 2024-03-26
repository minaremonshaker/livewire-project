<x-admin-modal id="createModal" title="Skill Create" method="store" >
    <div class="col-md-6 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name"  wire:model='form.name'/>
        <x-error property="form.name"/>
    </div>

    <div class="col-md-6 mb-0">
        <label for="emailExLarge" class="form-label">Email</label>
        <input type="text" id="emailExLarge" class="form-control" wire:model='form.progress' />
        <x-error property="form.progress"/>
    </div>
</x-admin-modal>
