<div class="table-responsive">
    <div class="d-flex flex-column align-items-end">
        <div class="mb-3">
            <input type="text" wire:model.live.debounce.300ms="search">
        </div>
        <div>
            <a href="{{route('pesananmencargo.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
        </div>
    </div>

    <table class=" table table-hover w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>STT</th>
                <th>Resi</th>
                <th>Tgl Masuk</th>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Kustomer</th>
                <th>Total Biaya</th>
                <th>Status Pembayaran</th>
                <th>MTC</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <tr></tr>
        </tbody>
    </table>
    <div class="float-end">
        {{-- {{ $data_customer->links() }} --}}
    </div>
</div>
