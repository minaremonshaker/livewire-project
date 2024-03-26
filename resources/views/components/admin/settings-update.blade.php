<form class="row" wire:submit.prevent='update'>
    @if(session()->has('message'))
      <div class="alert alert-primary" role="alert" id="message">{{ session()->get('message') }}</div>
    @endif
    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" aria-describedby="floatingInputHelp" wire:model='settingsForm.name' value={{ old('settingsForm.name') }}>
            <label for="floatingInput">Name</label>
            @error('settingsForm.name')
                <div id="floatingInputHelp" class="form-text text-danger">
                    *{{ $message }}   
                </div> 
            @enderror

        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="address" aria-describedby="floatingInputHelp" wire:model='settingsForm.address'>
            <label for="floatingInput">address</label>
            @error('settingsForm.address')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="phone" aria-describedby="floatingInputHelp" wire:model='settingsForm.phone'>
            <label for="floatingInput">Phone</label>
            @error('settingsForm.phone')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="email" aria-describedby="floatingInputHelp" wire:model='settingsForm.email'>
            <label for="floatingInput">email</label>
            @error('settingsForm.email')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="facebook" aria-describedby="floatingInputHelp" wire:model='settingsForm.facebook'>
            <label for="floatingInput">facebook</label>
            @error('settingsForm.facebook')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="facebook" aria-describedby="floatingInputHelp" wire:model='settingsForm.twitter'>
            <label for="floatingInput">twitter</label>
            @error('settingsForm.twitter')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="facebook" aria-describedby="floatingInputHelp" wire:model='settingsForm.linkedin'>
            <label for="floatingInput">linkedin</label>
            @error('settingsForm.linkedin')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="facebook" aria-describedby="floatingInputHelp" wire:model='settingsForm.instagram'>
            <label for="floatingInput">instagram</label>
            @error('settingsForm.instagram')
            <div id="floatingInputHelp" class="form-text text-danger">
                *{{ $message }}   
            </div> 
            @enderror
        </div>
    </div>


    <div class="col-md-6 mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>



