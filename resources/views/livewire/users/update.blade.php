<div wire:ignore.self class="modal fade" id="user_modal" tabindex="-1" role="dialog" aria-labelledby="user_modal_label"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="user_modal_label">{{$updateMode ? 'Edit' : 'Create'}} User</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-2">
                        <input type="hidden" wire:model="user_id">
                        <input type="text" class="form-control" wire:model="name" id="name" placeholder="Enter Name">
                        <label for="name">Name</label>
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" wire:model="email" id="email"
                            placeholder="Enter Email">
                        <label for="email">Email</label>
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input type="phone" class="form-control" wire:model="phone" id="phone"
                            placeholder="Enter phone">
                        <label for="phone">Phone</label>
                        @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-2">
                        <select wire:model.defer="role" class="form-select" id="role"
                            aria-label="Floating label select example">
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <label for="role">Role</label>
                    </div>

                    @if (!$updateMode)
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password" placeholder="Enter Password"
                            wire:model="password">
                        <label for="password">Password</label>
                        @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password_confirmation"
                            placeholder="Enter Password Confirmation" wire:model="password_confirmation">
                        <label for="password">Confirm Password</label>
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    @endif

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
