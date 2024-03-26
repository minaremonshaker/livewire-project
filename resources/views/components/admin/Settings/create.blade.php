<form class="row" wire:submit.prevent='update'>
    @if(session()->has('message'))
      <div class="alert alert-primary" role="alert" id="message">{{ session()->get('message') }}</div>
    @endif
    
    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="name" placeholder="name" aria-describedby="name" wire:model='settingsForm.name' value='{{ old('settingsForm.name') }}'/>
            <label for="floatingInput">Name</label>
            <x-error property="settingsForm.name"/>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="address" placeholder="address" aria-describedby="address" wire:model='settingsForm.address'/>
            <label for="floatingInput">address</label>
            <x-error property="settingsForm.address"/>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="Phone" placeholder="phone" aria-describedby="Phone" wire:model='settingsForm.phone'/>
            <label for="floatingInput">Phone</label>
            <x-error property="settingsForm.phone"/>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="email" placeholder="email" aria-describedby="email" wire:model='settingsForm.email'/>
            <label for="floatingInput">email</label>
            <x-error property="settingsForm.email"/>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="facebook" placeholder="facebook" aria-describedby="facebook" wire:model='settingsForm.facebook'/>
            <label for="floatingInput">facebook</label>
            <x-error property="settingsForm.facebook"/>
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="twitter" placeholder="twitter" aria-describedby="twitter" wire:model='settingsForm.twitter'/>
            <label for="floatingInput">twitter</label>
            <x-error property="settingsForm.twitter"/>
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="linkedin" placeholder="linkedin" aria-describedby="twitter" wire:model='settingsForm.linkedin'/>
            <label for="floatingInput">linkedin</label>
            <x-error property="settingsForm.linkedin"/>
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="instagram" placeholder="instagram" aria-describedby="instagram" wire:model='settingsForm.instagram'/>
            <label for="floatingInput">instagram</label>
            <x-error property="settingsForm.instagram"/>
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <button type="submit" class="btn btn-primary">
            <span>Create</span>

        </button>


    </div>

</form>



