<div class="table-responsive">
    <div class="d-flex flex-column align-items-end">
        <div class="mb-3">
            <input type="text" wire:model.debounce.300ms="search">
        </div>
        <div>
            <a href="{{route('customer.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
        </div>
    </div>

    <table class=" table table-hover w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Wilayah</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_customer as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->no_telp}}</td>
                    <td>{{$item->wilayah->nama}}</td>
                    <td>{{$item->alamat_detail}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->tempat_lahir}}, {{\Carbon\Carbon::parse($item->tanggal_lahir)->format('d-M-Y')}}</td>
                    <td>
                        <a href="{{route('customer.edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{route('customer.destroy', $item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="btn btn-outline-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-end">
        {{ $data_customer->links() }}
    </div>
</div>
