<style>
    label {
        font-weight: 900
    }

    .card {
        border: 1px solid black !important;
    }
</style>

<div wire:ignore.self class="modal fade" id="invoice_modal" tabindex="-1" role="dialog"
    aria-labelledby="invoice_modal_label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invoice_modal_label"><b>Invoice - Car Selling & Buying</b></h5>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                <div class="alert alert-danger text-center">
                    <span class="text-center"><i class="bi bi-exclamation-octagon me-1"></i> Validation Error: The data
                        you have entered is invalid or incomplete.</span>
                </div>
                @endif

                <h6 class="text-center"><strong><u>Seller Information</u></strong></h6>
                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="s_name">Name</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="s_name">
                            @error('s_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="s_father">Father</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="s_father"
                                id="s_father">
                            @error('s_father') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="s_cnic">CNIC</label>
                            <input type="text" class="form-control form-control-sm cnic" wire:model.defer="s_cnic"
                                id="s_cnic">
                            @error('s_cnic') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="s_phone">Phone</label>
                            <input type="text" class="form-control form-control-sm phone" wire:model.defer="s_phone"
                                id="s_phone">
                            @error('s_phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group mb-2">
                            <label for="s_address">Address</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="s_address"
                                id="s_address">
                            @error('s_address') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <h6 class="text-center"><strong><u>Buyer Information</u></strong></h6>
                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="b_name">Name</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="b_name"
                                id="b_name">
                            @error('b_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="b_father">Father</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="b_father"
                                id="b_father">
                            @error('b_father') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="b_cnic">CNIC</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="b_cnic"
                                id="b_cnic">
                            @error('b_cnic') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="b_phone">Phone</label>
                            <input type="text" class="form-control form-control-sm phone" wire:model.defer="b_phone"
                                id="b_phone">
                            @error('b_phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group mb-2">
                            <label for="b_address">Address</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="b_address"
                                id="b_address">
                            @error('b_address') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <h6 class="text-center"><strong><u>Vehicle Information</u></strong></h6>
                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="reg_no">Registration No.</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="reg_no"
                                id="reg_no">
                            @error('reg_no') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="chassis_no">Chassis No.</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="chassis_no"
                                id="chassis_no">
                            @error('chassis_no') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="engine_no">Engine No.</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="engine_no"
                                id="engine_no">
                            @error('engine_no') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="mark">Mark</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="mark" id="mark">
                            @error('mark') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="hp">Horsepower</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="hp" id="hp">
                            @error('hp') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="model">Model</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="model" id="model">
                            @error('model') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="kota" id="kota">
                            @error('kota') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="post_office">Post Office</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="post_office"
                                id="post_office">
                            @error('post_office') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="reg_book">Original Registration Book</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="reg_book"
                                id="reg_book">
                            @error('reg_book') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="reg_file">Original File</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="reg_file"
                                id="reg_file">
                            @error('reg_file') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="file_pg">Total File Pages</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="file_pg"
                                id="file_pg">
                            @error('file_pg') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="no_plate">Computerized Number Plate</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="no_plate"
                                id="no_plate">
                            @error('no_plate') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="car_color">Car Color</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="car_color"
                                id="car_color">
                            @error('car_color') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="amount">Amount <small>(Digits)</small></label>
                            <input wire:keyup="amountInWords" type="number" class="form-control form-control-sm"
                                wire:model.defer="amount">
                            @error('amount') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-6 form-group mb-2">
                            <label for="amount_words">Amount <small>(Words)</small></label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="amount_words"
                                id="amount_words">
                            @error('amount_words') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <h6 class="text-center"><strong><u>Seller Witness</u></strong></h6>
                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="w1_name">Name</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w1_name"
                                id="w1_name">
                            @error('w1_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w1_father">Father</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w1_father"
                                id="w1_father">
                            @error('w1_father') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w1_phone">Phone</label>
                            <input type="text" class="form-control form-control-sm phone" wire:model.defer="w1_phone"
                                id="w1_phone">
                            @error('w1_phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w1_address">Address</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w1_address"
                                id="w1_address">
                            @error('w1_address') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <h6 class="text-center"><strong><u>Buyer Witness</u></strong></h6>
                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="w2_name">Name</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w2_name"
                                id="w2_name">
                            @error('w2_name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w2_father">Father</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w2_father"
                                id="w2_father">
                            @error('w2_father') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w2_phone">Phone</label>
                            <input type="text" class="form-control form-control-sm phone" wire:model.defer="w2_phone"
                                id="w2_phone">
                            @error('w2_phone') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="w2_address">Address</label>
                            <input type="text" class="form-control form-control-sm" wire:model.defer="w2_address"
                                id="w2_address">
                            @error('w2_address') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="card p-3 mb-4">
                    <div class="row">
                        <div class="col-md-3 form-group mb-2">
                            <label for="s_commission">Buyer Commission</label>
                            <input type="number" class="form-control form-control-sm" wire:model.defer="s_commission"
                                id="s_commission">
                            @error('s_commission') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="b_commission">Seller Commission</label>
                            <input type="number" class="form-control form-control-sm" wire:model.defer="b_commission"
                                id="b_commission">
                            @error('b_commission') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="inv_date">Invoice Date</label>
                            <input type="date" class="form-control form-control-sm" wire:model.defer="inv_date"
                                id="inv_date">
                            @error('inv_date') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="col-md-3 form-group mb-2">
                            <label for="inv_time">Invoice Time</label>
                            <input type="time" class="form-control form-control-sm" wire:model.defer="inv_time"
                                id="inv_time">
                            @error('inv_time') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger text-center">
                    <span class="text-center"><i class="bi bi-exclamation-octagon me-1"></i> Validation Error: The data
                        you have entered is invalid or incomplete.</span>
                </div>
                @endif
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

@push('js')
<script>
    var phone_options = {
        mask: '0000-0000000'
    };
    var cnic_options = {
        mask: '00000-0000000-0'
    };

    function initInvoiceInputMask() {
        var s_phone_mask = IMask(document.getElementById('s_phone'), phone_options);
            var b_phone_mask = IMask(document.getElementById('b_phone'), phone_options);
            var s_cnic_mask = IMask(document.getElementById('s_cnic'), cnic_options);
            var b_cnic_mask = IMask(document.getElementById('b_cnic'), cnic_options);
            var w1_phone_mask = IMask(document.getElementById('w1_phone'), phone_options);
            var w2_phone_mask = IMask(document.getElementById('w2_phone'), phone_options);
    }
    initInvoiceInputMask();

    document.addEventListener('DOMContentLoaded', async function() {
        window.Livewire.on('reset-mask-values', function() {
           initInvoiceInputMask();
        });
    });
</script>
@endpush
