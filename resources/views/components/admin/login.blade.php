<form id="formAuthentication" class="mb-3"  wire:submit.prevent='login'>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Enter your email"  wire:model='form.email' autofocus />
        <div class="text-danger">@error('form.email') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control" wire:model='form.password'
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />  
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        <div class='text-danger'>@error('form.password') {{ $message }} @enderror</div>
        <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" wire:model='remember' />
              <label class="form-check-label"> Remember Me </label>
            </div>
          </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">
            <x-loading title="login" target="login"/>
        </button>
    </div>
</form>