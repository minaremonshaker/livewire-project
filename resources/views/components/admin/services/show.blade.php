<x-admin-modal id="showSkill" title="Skill show"  :hasSubmit=false >
    <div class="col-md-6 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name"  wire:model='name' readonly/>
        <x-error property="name"/>
    </div>

    <div class="col-md-6 mb-0">
        <label for="excreptExLarge" class="form-label">excerpt</label>
        <input type="text" id="excreptExLarge" class="form-control" wire:model='excerpt' readonly/>
        <x-error property="excerpt"/>
    </div>
    <div class="col-md-12 mb-0">
        <label for="iconExLarge" class="form-label">icon</label>
        <input type="text" id="iconExLarge" class="form-control" wire:model='icon' readonly/>
        <x-error property="icon"/>
    </div>
    <div class="col-md-12 mb-0">
        <label for="descriptionExLarge" class="form-label">description</label>
        <textarea id="descriptionExLarge" class="form-control" wire:model='description' rows="30" readonly>

        </textarea>
        <x-error property="description"/>
    </div>
</x-admin-modal>
