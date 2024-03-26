<div>
    <span wire:loading.remove>{{ $title }}</span>
    <div class="text-center" wire:loading.delay.shortest wire:target='{{ $target }}'>
        <span class="spinner-border spinner-border-sm text-white" role="status">
            <span class="visually-hidden">Loading...</span>
        </span>
    </div>
</div>