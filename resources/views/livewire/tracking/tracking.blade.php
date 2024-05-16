<div class="container">
    <div class="row mb-3 justify-content-center">
        <div class="col-md-7 text-center">
            <div class="block-heading-1">
                <h2>Cek Resi</h2>
                <p>Cek Resi Untuk Mengetahui Status Barang Anda.</p>
            </div>
        </div>
    </div>
    <input type="text" class="form-control" wire:model.defer='no_resi'>
    <button class="btn btn-primary mt-3 w-100" wire:click='cekResi'>Cek Resi</button>
    @if ($is_searched == true && $no_resi == '')
        <div class="row justify-content-center">
            <h3 class="text-danger text-center mt-4">Silahkan Isi Nomor Resi</h3>
        </div>
    @elseif($is_found == false && $no_resi != '')
        <div class="row justify-content-center">
            <h3 class="text-danger text-center mt-4">No Resi Tidak Ditemukan</h3>
        </div>
    @elseif($is_found == true && $no_resi != '')
        <div class="row justify-content-left">
            <h3 class="mt-4 ml-3 text-black">Detail Resi {{ $no_resi }}</h3>
        </div>
        <div class="row justify-content-center">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">No Resi</th>
                            <th class="text-center">Asal</th>
                            <th class="text-center">Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $no_resi }}</td>
                            <td class="text-center">{{ $data_pesanan->daerahasal->nama }}</td>
                            <td class="text-center">{{ $data_pesanan->daerahtujuan->nama }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row justify-content-left">
                <h3 class="mt-4 ml-3 text-black">Alamat Penerima & Pengirim</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Pengirim</th>
                            <th class="text-center">Penerima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <p>{{ $data_pesanan->customer->nama }}</p>
                                <p class="font-weight-bold">{{ $data_pesanan->customer->alamat_detail }}</p>
                            </td>
                            <td class="text-center">
                                <p>{{ $data_pesanan->nama_penerima }}</p>
                                <p class="font-weight-bold">{{ $data_pesanan->alamat_detail_tujuan }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive">

                <div class="row justify-content-left">
                    <h3 class="mt-4 ml-3 text-black">Perjalanan Paket {{$no_resi}}</h3>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_mtc as $item)
                          <tr>
                             <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d-m-Y')}}</td>
                             <td>{{$item->statusmanifes->keterangan}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
