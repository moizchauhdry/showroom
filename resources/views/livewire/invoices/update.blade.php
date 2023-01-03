<style>
    label {
        font-weight: 900
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

                <form>
                    <h5 class="text-center"><strong><u>Seller Information</u></strong></h5>
                    <div class="card p-3 mb-3">
                        <div class="row">
                            <div class="col-md-3 form-group mb-2">
                                <label for="s_name">Name</label>
                                <input type="text" class="form-control form-control-sm" wire:model="s_name" id="s_name">
                                @error('s_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="s_father">Father</label>
                                <input type="text" class="form-control form-control-sm" wire:model="s_father"
                                    id="s_father">
                                @error('s_father') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="s_cnic">CNIC</label>
                                <input type="text" class="form-control form-control-sm cnic" wire:model="s_cnic"
                                    id="s_cnic">
                                @error('s_cnic') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="s_phone">Phone</label>
                                <input type="text" class="form-control form-control-sm phone" wire:model="s_phone"
                                    id="s_phone">
                                @error('s_phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="s_address">Address</label>
                                <input type="text" class="form-control form-control-sm" wire:model="s_address"
                                    id="s_address">
                                @error('s_address') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center"><strong><u>Buyer Information</u></strong></h5>
                    <div class="card p-3 mb-3">
                        <div class="row">
                            <div class="col-md-3 form-group mb-2">
                                <label for="b_name">Name</label>
                                <input type="text" class="form-control form-control-sm" wire:model="b_name" id="b_name">
                                @error('b_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="b_father">Father</label>
                                <input type="text" class="form-control form-control-sm" wire:model="b_father"
                                    id="b_father">
                                @error('b_father') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="b_cnic">CNIC</label>
                                <input type="text" class="form-control form-control-sm" wire:model="b_cnic" id="b_cnic">
                                @error('b_cnic') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="b_phone">Phone</label>
                                <input type="text" class="form-control form-control-sm phone" wire:model="b_phone"
                                    id="b_phone">
                                @error('b_phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-6 form-group mb-2">
                                <label for="b_address">Address</label>
                                <input type="text" class="form-control form-control-sm" wire:model="b_address"
                                    id="b_address">
                                @error('b_address') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center"><strong><u>Car Information</u></strong></h5>
                    <div class="card p-3 mb-3">
                        <div class="row">
                            <div class="col-md-3 form-group mb-2">
                                <label for="reg_no">Registration No.</label>
                                <input type="text" class="form-control form-control-sm" wire:model="reg_no" id="reg_no">
                                @error('reg_no') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="chassis_no">Chassis No.</label>
                                <input type="text" class="form-control form-control-sm" wire:model="chassis_no"
                                    id="chassis_no">
                                @error('chassis_no') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="engine_no">Engine No.</label>
                                <input type="text" class="form-control form-control-sm" wire:model="engine_no"
                                    id="engine_no">
                                @error('engine_no') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="mark">Mark</label>
                                <input type="text" class="form-control form-control-sm" wire:model="mark" id="mark">
                                @error('mark') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="hp">Horsepower</label>
                                <input type="text" class="form-control form-control-sm" wire:model="hp" id="hp">
                                @error('hp') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="model">Model</label>
                                <input type="text" class="form-control form-control-sm" wire:model="model" id="model">
                                @error('model') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control form-control-sm" wire:model="kota" id="kota">
                                @error('kota') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="post_office">Post Office</label>
                                <input type="text" class="form-control form-control-sm" wire:model="post_office"
                                    id="post_office">
                                @error('post_office') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="reg_book">Original Registration Book</label>
                                <input type="text" class="form-control form-control-sm" wire:model="reg_book"
                                    id="reg_book">
                                @error('reg_book') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="reg_file">Original File</label>
                                <input type="text" class="form-control form-control-sm" wire:model="reg_file"
                                    id="reg_file">
                                @error('reg_file') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="file_pg">Total File Pages</label>
                                <input type="text" class="form-control form-control-sm" wire:model="file_pg"
                                    id="file_pg">
                                @error('file_pg') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="no_plate">Computerized Number Plate</label>
                                <input type="text" class="form-control form-control-sm" wire:model="no_plate"
                                    id="no_plate">
                                @error('no_plate') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="car_color">Car Color</label>
                                <input type="text" class="form-control form-control-sm" wire:model="car_color"
                                    id="car_color">
                                @error('car_color') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="amount">Amount <small>(Digits)</small></label>
                                <input type="text" class="form-control form-control-sm" wire:model="amount" id="amount">
                                @error('amount') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="amount_words">Amount <small>(Words)</small></label>
                                <input type="text" class="form-control form-control-sm" wire:model="amount_words"
                                    id="amount_words">
                                @error('amount_words') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center"><strong><u>Seller Witness</u></strong></h5>
                    <div class="card p-3 mb-3">
                        <div class="row">
                            <div class="col-md-3 form-group mb-2">
                                <label for="w1_name">Name</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w1_name"
                                    id="w1_name">
                                @error('w1_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w1_father">Father</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w1_father"
                                    id="w1_father">
                                @error('w1_father') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w1_phone">Phone</label>
                                <input type="text" class="form-control form-control-sm phone" wire:model="w1_phone"
                                    id="w1_phone">
                                @error('w1_phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w1_address">Address</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w1_address"
                                    id="w1_address">
                                @error('w1_address') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center"><strong><u>Buyer Witness</u></strong></h5>
                    <div class="card p-3 mb-3">
                        <div class="row">
                            <div class="col-md-3 form-group mb-2">
                                <label for="w2_name">Name</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w2_name"
                                    id="w2_name">
                                @error('w2_name') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w2_father">Father</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w2_father"
                                    id="w2_father">
                                @error('w2_father') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w2_phone">Phone</label>
                                <input type="text" class="form-control form-control-sm phone" wire:model="w2_phone"
                                    id="w2_phone">
                                @error('w2_phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-md-3 form-group mb-2">
                                <label for="w2_address">Address</label>
                                <input type="text" class="form-control form-control-sm" wire:model="w2_address"
                                    id="w2_address">
                                @error('w2_address') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
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

@push('js')
<script>
    var s_phone = document.getElementById('s_phone');
    var b_phone = document.getElementById('b_phone');
    var s_cnic= document.getElementById('s_cnic');
    var b_cnic= document.getElementById('b_cnic');
    var w1_phone = document.getElementById('w1_phone');
    var w2_phone = document.getElementById('w2_phone');

    var phone_options = {
        mask: '0000-0000000'
    };
    var cnic_options = {
        mask: '00000-0000000-0'
    };

    var mask = IMask(s_phone, phone_options);
    var mask = IMask(b_phone, phone_options);
    var mask = IMask(w1_phone, phone_options);
    var mask = IMask(w2_phone, phone_options);
    var mask = IMask(s_cnic, cnic_options);
    var mask = IMask(b_cnic, cnic_options);
</script>
@endpush
