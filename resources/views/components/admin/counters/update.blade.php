<x-admin-modal id="editSkills" title="Skill Edit" method="store" >
    <div class="col-md-4 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input  id="nameExLarge" class="form-control" placeholder="Enter Name"  wire:model='name'/>
        <x-error property="name"/>
    </div>

    <div class="col-md-4 mb-0">
        <label for="countExLarge" class="form-label">count</label>
        <input type="text" id="countExLarge" class="form-control" wire:model='count' placeholder="10"/>
        <x-error property="count"/>
    </div>

    <div class="col-md-4 mb-0">
        <label for="iconExLarge" class="form-label">icon</label>
        <input type="text" id="iconExLarge" class="form-control" wire:model='icon' placeholder="fa-certificate" />
        <x-error property="icon"/>
    </div>
</x-admin-modal>
