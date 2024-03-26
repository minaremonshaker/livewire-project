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
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if(count($subscribers) > 0 )
                      @foreach ($subscribers as $subscriber )
                      <tr wire:key='{{ $subscriber->id }}'>
                        <td class="w-100"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                              {{ $subscriber->email }}</strong></td>
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
                                       wire:click.prevent="$dispatch('delete',{id: {{ $subscriber->id }}})"
                                    >
                                       <i class="bx bx-trash me-1"></i> 
                                       Delete
                                    </a>

                                </div>
                            </div>
                        </td>
                    </tr>
                      @endforeach
                    @endif
                    {{ $subscribers->links(); }}
                </tbody>
            </table>
        </div>
    </div>
    <livewire:components.admin.subscribers.delete/>
</div>

