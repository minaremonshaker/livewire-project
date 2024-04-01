
<div class="navbar-nav align-items-center">

  <form class="postion-relative">
    <div class='search-form' x-init="{ open:false }" x-data="{ open:false }">
      <div class="nav-item d-flex align-items-center">
        <i class="bx bx-search fs-4 lh-0"></i>
        <input type="text" class="form-control border-0 shadow-none dropdown-toggle" placeholder="Search..."
          aria-label="Search..." 
          wire:model.live='term' 
          x-on:input="open = true" 
          x-on:keydown="open=!open"
          x-on:keyup.backspace="oepn=!open" > 
      </div>
      <div class="card position-absolute" style="top:4rem; right:1px; width:100%" 
        x-cloak x-show="open"
        @click.outside="open= false"
        x-on:keyup.backspace="oepn=!open" 
        >
        <div class="d-flex align-items-start row">
          <div class="col-sm-12">
            <div class="card-body">
              <h5 class="card-title text-primary">Search Results :</h5>
              <ul class="list-group">
                @foreach ($results as $result )
                  @foreach ($result as $res )
                     <li wire:key='{{ $res->id }}' class="list-group-item"><a href="#" wire:click="show('{{ $res->name }}')">{{ $res->name }}</a></li>    
                  @endforeach
                @endforeach
                {{ $result->links() }}
              </ul>
            
            </div>
          </div>
     
        </div>
      </div>
    </div>
   
  </form>
 
</div>