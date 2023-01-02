<div class="container">

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @can('invoice-create')
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-success float-end my-1" data-bs-toggle="modal"
                data-bs-target="#invoice_modal"><i class="bi bi-plus-lg me-1"></i>Add Invoice
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
                    <th>Invoice #</th>
                    <th>Registration No.</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($invoices as $invoice)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $invoice->id }}</td>
                    <td>{{ $invoice->reg_no }}</td>
                    <td>
                        @can('invoice-edit')
                        <button wire:click="edit({{ $invoice->id }})" class="btn btn-primary btn-sm my-1"
                            data-bs-toggle="modal" data-bs-target="#invoice_modal">
                            <i class="bi bi-pencil-square me-1"></i>Edit</button>
                        @endcan

                        @can('invoice-delete')
                        <button onclick="deleteConfirmation('delete-invoice','{{$invoice->id}}')"
                            class="btn btn-danger btn-sm my-1">
                            <i class="bi bi-trash me-1"></i>Delete</button>
                        @endcan
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">There are no invoices found yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-lg-6">
            Showing {{ $invoices->firstItem() ? $invoices->firstItem() : 0 }} to {{ $invoices->lastItem() ?
            $invoices->lastItem() : 0}} of total
            {{ $invoices->total() }} entries
        </div>
        <div class="col-lg-6">
            <div class="d-flex justify-content-end px-2 mx-2 my-2">
                {{ $invoices->links() }}
            </div>
        </div>
    </div>

    @can('invoice-edit')
    @include('livewire.invoices.update')
    @endcan

    @include('livewire.loader')

</div>
