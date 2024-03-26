<div>
    <div class="card-header">
        <div class='d-flex justify-content-start'>
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                aria-describedby="basic-addon-search31" style="flex-basis: 50%" wire:model.live='term'>
        </div>
    </div>

    <div class="card-body">

        <div class="table-responsive text-nowrap w-100" style="height: 300px">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if(count($skills) > 0 )
                      @foreach ($skills as $skill )
                      <tr wire:key='{{ $skill->id }}'>
                        <td class="w-50"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                              {{ $skill->name }}</strong></td>
                        <td class="w-50"> {{ $skill->progress }}%</td>
                        <td>
                            <div class="dropdown">
                                <button type="button"
                                    class="btn p-0 dropdown-toggle hide-arrow justify-content-center"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a 
                                       class="dropdown-item" 
                                       href="#" 
                                       wire:click.prevent="$dispatch('edit',{ id: {{ $skill->id }} })">
                                       <i class="bx bx-edit-alt me-1"></i>
                                       Edit
                                    </a>
                                    <a 
                                       class="dropdown-item" 
                                       href="#"
                                       wire:click.prevent="$dispatch('delete',{id: {{ $skill->id }}})"
                                    >
                                       <i class="bx bx-trash me-1"></i> 
                                       Delete
                                    </a>
                                    <a 
                                    class="dropdown-item" 
                                    href="#"
                                    wire:click.prevent="$dispatch('show',{id: {{ $skill->id }}})"
                                 >
                                 <i class='bx bx-show'></i>
                                    show
                                 </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                      @endforeach
                    @endif
                    {{ $skills->links(); }}
                </tbody>
            </table>
        </div>
    </div>
</div>


