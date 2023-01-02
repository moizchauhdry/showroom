<div wire:ignore.self class="modal fade" id="role_modal" tabindex="-1" role="dialog" aria-labelledby="role_modal_label"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="role_modal_label">{{$updateMode ? 'Edit' : 'Create'}} Role</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-2">
                        <input type="hidden" wire:model="user_id">
                        <input wire:model="name" type="text" class="form-control" id="name" placeholder="Enter Name">
                        <label for="name">Name</label>
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="card p-3">
                        <div class="form-group">
                            @foreach ($permissions as $permission)
                            <div>
                                <input wire:model.defer="permission" type="checkbox" name="permission"
                                    value="{{$permission->id}}">
                                <span for="permission" class="text-uppercase">{{clean_string($permission->name)}}</span>
                            </div>
                            @endforeach
                            @error('permission') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-danger"
                    data-bs-dismiss="modal">Cancel</button>
                @if ($updateMode)
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save
                    & Update</button>
                @else
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save &
                    Submit</button>
                @endif
            </div>
        </div>
    </div>
</div>
