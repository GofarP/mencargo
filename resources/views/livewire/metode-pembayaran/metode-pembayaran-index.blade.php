<div>
    <div class="table-responsive">

        <div class="d-flex flex-column align-items-end">
            <div class="mb-3">
                <input type="text" wire:model.debounce.300ms="search">
            </div>
            <div>
                <a href="{{route('metodepembayaran.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-hover table-stripped w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_metode_pembayaran as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>
                            <a href="{{route('metodepembayaran.edit',$item->id)}}" class="btn btn-outline-warning">Edit</a>
                            <br>
                            <form action="{{route('metodepembayaran.destroy',$item->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger mb-2" onclick="return confirm('Apakah Anda Akan Menghapus Data Ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-end">
                {{ $data_metode_pembayaran->links() }}
            </div>
        </div>

    </div>
</div>
