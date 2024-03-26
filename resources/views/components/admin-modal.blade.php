<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true" wire:ignore.self>

    <div class="modal-dialog modal-xl" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="$dispatch('close')"></button>
            </div>
            <form wire:submit.prevent='{{ $method }}'>
                <div class="modal-body">
                
                    <div class="row">
                        {{ $slot }}
                    </div>
                
            </div>

            <div class="modal-footer">
                @if($hasClose)
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" wire:click="$dispatch('close')">
                    Close
                </button>
                @endif
                @if($hasSubmit)
                <button type="submit" class="btn btn-{{ $color }}" wire:target='store'>
                    <x-loading title="create" target="store"/>
                </button>
                @endif
            </div>
            </form>

        </div>
    </div>
</div>