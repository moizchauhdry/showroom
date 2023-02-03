<div class="container">

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @can('user-create')
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-success float-end my-1" data-bs-toggle="modal"
                data-bs-target="#user_modal"><i class="bi bi-plus-lg me-1"></i>Add User
            </button>
        </div>
    </div>
    @endcan

    <div class="row">
        <div class="col-md-3">
            <input wire:model="search" type="search" class="form-control my-1" id="search" placeholder="Search">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="bg-success text-white">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ Avatar::create($user->name)->setBackground('#001122')->setDimension(40)->setFontSize(15)->toBase64() }}"
                            class="me-1" />
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td class="text-capitalize">{{ $user->roles[0]->name }}</td>
                    <td class="text-capitalize"><span class="badge text-bg-{{$user->status ? 'success' :
                            'danger'}}">{{ $user->status ? 'Active' : 'Inactive' }}</span></td>
                    <td>
                        @can('user-edit')
                        <button wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm my-1"
                            data-bs-toggle="modal" data-bs-target="#user_modal">
                            <i class="bi bi-pencil-square me-1"></i>Edit</button>
                        @endcan

                        @can('user-delete')
                        <button onclick="deleteConfirmation('delete-user','{{$user->id}}')"
                            class="btn btn-danger btn-sm my-1">
                            <i class="bi bi-trash me-1"></i>Delete</button>
                        @endcan
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">There are no users found yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-lg-6">
            Showing {{ $users->firstItem() ? $users->firstItem() : 0 }} to {{ $users->lastItem() ?
            $users->lastItem() : 0}} of total
            {{ $users->total() }} entries
        </div>
        <div class="col-lg-6">
            <div class="d-flex justify-content-end px-2 mx-2 my-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    @can('user-edit')
    @include('livewire.users.update')
    @endcan

    @include('livewire.loader')

</div>