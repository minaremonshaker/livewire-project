<x-admin-modal id="editSkills" title="Skill Edit" method="store" >
    <div class="col-md-6 mb-3">
        <label for="nameExLarge" class="form-label">Name</label>
        <input type="text" id="nameExLarge" class="form-control" placeholder="Enter Name" wire:model='name' />
        <x-error property="name" />
    </div>

    <div class="col-md-6 mb-0">
        <label for="excreptExLarge" class="form-label">link</label>
        <input type="text" id="excreptExLarge" class="form-control" wire:model='link' />
        <x-error property="link" />
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">image</label>
        <input type="file" class="form-control" wire:model='image' />
        <x-error property="image" />

    </div>
    <div class="col-md-6 mb-0">
        <label for="iconExLarge" class="form-label">Category</label>
        <select class="form-control" wire:model='category_id'>
            <option value="" @readonly(true)>Select Category</option>
            @if(count($Categories) > 0)
            @foreach ($Categories as $category )
            <option value="{{ $category->id }}" wire:key='category-{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
            @endif
        </select>
        <x-error property="category_id" />
    </div>
    <div class="col-md-12 mb-0 mt-3">
        <label for="descriptionExLarge" class="form-label">description</label>
        <textarea id="descriptionExLarge" class="form-control" wire:model='description' rows="30">

        </textarea>
        <x-error property="description" />
    </div>
</x-admin-modal>