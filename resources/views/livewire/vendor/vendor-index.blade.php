<div>
    <div class="table-responsive">

        <div class="d-flex flex-column align-items-end">
            <div class="mb-3">
                <input type="text" wire:model.debounce.300ms="search">
            </div>
            <div>
                <a href="{{route('datavendor.create')}}" class="btn btn-outline-success mb-3">Tambah</a>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-hover table-stripped w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Penanggung Jawab</th>
                        <th>Bank</th>
                        <th>No Rekening</th>
                        <th>No Telp</th>
                        <th>Wilayah</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_vendor as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->penanggung_jawab}}</td>
                        <td>{{$item->bank}}</td>
                        <td>{{$item->no_rekening}}</td>
                        <td>{{$item->no_telp}}</td>
                        <td>{{$item->wilayah->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{number_format($item->harga)}}</td>
                        <td>
                            <a href="{{route('datavendor.edit',$item->id)}}" class="btn btn-outline-warning">Edit</a>
                            <br>
                            <form action="{{route('datavendor.destroy',$item->id)}}" method="POST" class="d-inline">
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
                {{ $data_vendor->links() }}
            </div>
        </div>

    </div>
</div>
