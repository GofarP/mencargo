<div>
    <div class="table-responsive">

        <div class="d-flex flex-column align-items-end">
            <div class="mb-3">
                <input type="text" wire:model.debounce.300ms="search">
            </div>
            <div>
                <a href="{{ route('mtc.create') }}" class="btn btn-outline-success mb-3">Tambah</a>
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
                        <th>Kota Asal</th>
                        <th>Kota Tujuan</th>
                        <th>Vendor</th>
                        <th>Tanggal Jalan</th>
                        <th>Estimasi</th>
                        <th>Foto</th>
                        <th>Penerima</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_mtc as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_update)->format('d-M-Y') }}</td>
                            <td>{{ $item->statusmanifes->nama }}</td>
                            <td>{{ $item->pesananmencargo->stt }}</td>
                            <td>{{ $item->pesananmencargo->resi }}</td>
                            <td>{{ $item->pesananmencargo->nama_penerima }}</td>
                            <td>{{ $item->pesananmencargo->daerahasal->nama }}</td>
                            <td>{{ $item->pesananmencargo->daerahtujuan->nama }}</td>
                            <td>{{ $item->vendor->nama }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_jalan)->format('d-M-Y') }}</td>
                            <td>{{ $item->estimasi }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" alt="Image Mtc" style="width:100px;height:100px">
                            </td>
                            <td>{{ $item->penerima }}</td>
                            <td>
                                <a href="{{ route('mtc.edit', $item->id) }}" class="btn btn-outline-warning">Edit</a>

                                <form action="{{ route('mtc.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger"
                                        onclick="return confirm('Apakah Anda Akan Menghapus Data Ini')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-end">
                {{ $data_mtc->links() }}
            </div>
        </div>

    </div>
</div>
