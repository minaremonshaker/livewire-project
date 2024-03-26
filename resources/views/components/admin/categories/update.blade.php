<x-admin-modal id="editSkills" title="Category Edit" method="store" >
    <div class="col-md-12 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input type="text" id="nameExLarge" class="form-control" placeholder="EnterName"  wire:model='name'/>
        <x-error property="name"/>
    </div>
</x-admin-modal>
