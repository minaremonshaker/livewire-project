<x-admin-modal id="showSkill" title="ShowSkill" method="" :hasSubmit='false' >
    <div class="col-md-6 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" readonly wire:model='name'/>
    </div>

    <div class="col-md-6 mb-0">
        <label for="emailExLarge" class="form-label">progress</label>
        <input type="text" id="emailExLarge" class="form-control" readonly wire:model='progress' />
    </div>
</x-admin-modal>


