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
                        <th>name</th>
                        <th>email</th>
                        <th>status</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($messages) > 0)
                        @foreach ($messages as $message)
                            <tr wire:key='{{ $message->id }}'>
                                <td class="w-50">
                                    <strong>
                                        {{ $message->name }}
                                    </strong>
                                </td>
                                <td class="w-50">{{ $message->email }}</td>
                                <td><span
                                        class="{{ $message->status === 'read' ? 'badge bg-label-success' : 'badge bg-label-danger' }}">{{ $message->status }}</span>
                                </td>
                                <td>{{ $message->created_at }}</td>
                                <td>{{ $message->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow justify-content-center"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent="$dispatch('show',{id: {{ $message->id }}})">
                                                <i class='bx bx-show me-1'></i>
                                                show
                                            </a>
                                            <a class="dropdown-item" href="#"
                                                wire:click.prevent="$dispatch('delete',{id: {{ $message->id }}})">
                                                <i class="bx bx-trash me-1"></i>
                                                Delete
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
            {{ $messages->links() }}
        </div>
    </div>
    <livewire:components.admin.messages.show>
    <livewire:components.admin.messages.delete>
</div>


@assets
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
@endassets
