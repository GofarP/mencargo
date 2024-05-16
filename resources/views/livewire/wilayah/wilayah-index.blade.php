<div class="table-responsive">
    <div class="d-flex flex-column align-items-end">
        <div class="mb-3">
            <input type="text" wire:model.debounce.300ms="search">
        </div>
        <div>
            <a href="{{route('datawilayah.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
        </div>
    </div>

    <table class=" table table-hover w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Wilayah Tingkat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_wilayah as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tingkatwilayah->nama ?? '-'}}</td>
                    <td>
                        <a href="{{route('datawilayah.edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                        <form action="{{route('datawilayah.destroy', $item->id)}}" method="POST" class="d-inline">
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
        {{ $data_wilayah->links() }}
    </div>
</div>
