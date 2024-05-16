<div>
    <div class="table-responsive">

        <div class="d-flex flex-column align-items-end">
            <div class="mb-3">
                <input type="text" wire:model.debounce.300ms="search">
            </div>
            <div>
                <a href="{{route('statuspembayaran.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-hover table-stripped w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_status_manifes as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{route('statusmanifes.update',$item->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('statusmanifes.destroy',$item->id)}}" method="POST" class="d-flex inline">
                                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-end">
                {{ $data_status_manifes->links() }}
            </div>
        </div>

    </div>
</div>
