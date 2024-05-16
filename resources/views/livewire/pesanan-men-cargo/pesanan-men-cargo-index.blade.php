<div class="table-responsive">
    <div class="d-flex flex-column align-items-end">
        <div class="mb-3">
            <input type="text" wire:model.debounce.300ms="search">
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_pesanan_mencargo as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->stt}}</td>
                <td>{{$item->resi}}</td>
                <td>{{\Carbon\Carbon::parse($item->tgl_masuk)->format('d-M-Y')}}</td>
                <td>{{$item->daerahasal->nama}}</td>
                <td>{{$item->daerahtujuan->nama}}</td>
                <td>{{$item->customer->nama}}</td>
                <td>{{number_format($item->total_biaya)}}</td>
                <td>{{$item->statuspembayaran->nama}}</td>
                <td>
                    <a href="{{route('pesananmencargo.edit',$item->id)}}" class="btn btn-outline-warning">Edit</a>
                    <form action="{{route('pesananmencargo.destroy',$item->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini? ')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-end">
        {{ $data_pesanan_mencargo->links() }}
    </div>
</div>
