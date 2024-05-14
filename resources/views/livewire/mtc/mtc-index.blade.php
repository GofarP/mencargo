<div>
    <div class="table-responsive">

        <div class="d-flex flex-column align-items-end">
            <div class="mb-3">
                <input type="text" wire:model.live.debounce.300ms="search">
            </div>
            <div>
                <a href="{{route('mtc.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-stripped w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Update</th>
                        <th>Status Manifes</th>
                        <th>STT</th>
                        <th>Resi</th>
                        <th>Nama Penerima</th>
                        <th>Kota Tujuan</th>
                        <th>Vendor</th>
                        <th>Asal Tujuan</th>
                        <th>Tanggal Jalan</th>
                        <th>Estimasi</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <div class="float-end">
                {{-- {{ $data_status_pembayaran->links() }} --}}
            </div>
        </div>

    </div>
</div>
