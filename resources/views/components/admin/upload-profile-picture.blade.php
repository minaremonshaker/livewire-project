<div class="modal fade" id="profile-picture-upload" tabindex="-1" style="display: none;" aria-hidden="true"
    wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Upload Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  wire:click='$dispatch("close")' ></button>
            </div>
            <form wire:submit.prevent='store'>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Name</label>
                            <input type="file" class="form-control" wire:model='image'>
                            <x-error property="image"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" wire:click='$dispatch("close")'>
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">upload</button>
                </div>
            </form>
        </div>
    </div>
</div>