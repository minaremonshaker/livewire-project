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
                        <th>Excrept</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($services) > 0)
                        @foreach ($services as $service)
                            <tr wire:key='{{ $service->id }}'>
                                <td class="w-50">
                                    <strong>
                                        {{ $service->name }}
                                    </strong>
                                </td>
                                <td class="w-50">{{ $service->excerpt }}</td>
                                <td><i class="{{ $service->icon }} fa-2x text-secondary"></i></td>
                                <td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow justify-content-center"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent="$dispatch('edit',{ id: {{ $service->id }} })">
                                                <i class="bx bx-edit-alt me-1"></i>
                                                Edit
                                            </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent="$dispatch('delete',{id: {{ $service->id }}})">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
                                            </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent="$dispatch('show',{id: {{ $service->id }}})">
                                                <i class='bx bx-show me-1'></i>
                                                show
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center text-danger" colspan="4">
                                <p>No Data Found</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $services->links() }}
        </div>
    </div>

    <livewire:components.admin.services.update/>
    <livewire:components.admin.services.delete/>
    <livewire:components.admin.services.show/>
</div>


@assets
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
@endassets
