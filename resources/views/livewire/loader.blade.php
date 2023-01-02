<div wire:loading wire:target="store,edit,update,delete,cancel,previousPage,nextPage,gotoPage">
    {{-- <div class="livewire-loader livewire-loader-bg">
        <img src="{{asset('images/loader.gif')}}" style="width:50px;height:50px">
    </div> --}}
    <div wire:loading id="wireLoadingBar">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="modal-backdrop show backStyle"></div>
    </div>
</div>

<div wire:loading wire:target="search">
    <div class="livewire-table-loader">
        <img src="{{asset('images/table-loader.gif')}}" style="width:50px;height:50px">
    </div>
</div>
