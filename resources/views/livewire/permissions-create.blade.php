<div wire:ignore.self class="modal fade" id="modalCreatePermission" tabindex="-1" aria-labelledby="modalCreatePermissionLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateKategoriLabel">Buat Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="storePermission">
                    <div class="row g-3">
                        <div class="col-xxl-6">
                            <div>
                                <label class="form-label" for="name">Name</label>
                                <input wire:model="name" type="text" class="form-control" id="name" value="" placeholder="Slug Permission" disabled>
                                @error('name')
                                <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div>
                                <label class="form-label" for="display_name">Display Name</label>
                                <input wire:model="display_name" wire:keyup='generateSlug' type="text" class="form-control" id="display_name" placeholder="Masukkan Nama Permission ..." autofocus>
                                @error('display_name')
                                <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xxl-6">
                            <div>
                                <label class="form-label" for="description">Deskripsi</label>
                                <input wire:model="description" type="text" class="form-control" id="description" placeholder="Masukkan Deskripsi Permission ...">
                                @error('description')
                                <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
