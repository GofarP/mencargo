<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('master.masterdashboard')
@section('sidebar')
    @include('partials.partials-dashboard.sidebar')
@endsection

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

            </nav>

            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Pesanan Men cargo</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
                    @if (session('flash'))
                        <div class="alert alert-success" role="alert">
                            {{ session('flash') }}
                        </div>
                    @elseif(session('error-flash'))
                        <div class="alert alert-error" role="alert">
                            {{ session('error-flash') }}
                        </div>
                    @endif

                    <div class="card w-100">
                        <div class="card-body">
                            <form action="{{ route('pesananmencargo.update',$pesananmencargo->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <section class="section">
                                    <div class="row">

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="stt">STT</label>
                                                <input type="number" id="stt" name="stt" class="form-control" value="{{$pesananmencargo->stt}}" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="resi">Resi</label>
                                                <input type="text" id="resi" name="resi" class="form-control" value="{{$pesananmencargo->resi}}" required autofocus>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                            <label for="customer_id"> Customer</label>
                                            <select name="customer_id" class="form-control js-example-basic-single">
                                                <option value="">Pilih Customer</option>
                                                @foreach ($data_customer as $item)
                                                <option value="{{$item->id}}" {{$item->id == $pesananmencargo->customer_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="metode_pembayaran">Metode Pembayaran</label>
                                                <select  name="metode_pembayaran_id"  class="form-control js-example-basic-single" >
                                                    <option value="">Pilih Metode Pembayaran</option>
                                                    @foreach ($data_metode_pembayaran as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $pesananmencargo->metode_pembayaran_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="status_pembayaran_id">Status Pembayaran</label>
                                                <select  name="status_pembayaran_id"  class="form-control js-example-basic-single"
                                                    >
                                                    <option value="">Pilih Status Pembayaran</option>
                                                    @foreach ($data_status_pembayaran as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $pesananmencargo->status_pembayaran_id ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="harga_kg_barang">Harga Barang (KG)</label>
                                                <input type="number" name="harga_kg_barang" id="harga_kg_barang" value="{{$pesananmencargo->harga_kg_barang}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="harga_unit">Harga Unit</label>
                                                <input type="number" name="harga_unit" id="harga_unit" value="{{$pesananmencargo->harga_unit}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="harga_diskon">Harga Diskon</label>
                                                <input type="number" name="harga_diskon" id="harga_diskon" value="{{$pesananmencargo->harga_diskon}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="biaya_tambahan">Biaya Tambahan</label>
                                                <input type="number" name="biaya_tambahan" id="biaya_tambahan" value="{{$pesananmencargo->biaya_tambahan}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="total_biaya">Total Biaya</label>
                                                <input type="number" name="total_biaya" id="total_biaya" value="{{$pesananmencargo->total_biaya}}" class="form-control" readonly required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="uang_muka">Uang Muka</label>
                                                <input type="number" name="uang_muka" id="uang_muka" value="{{$pesananmencargo->uang_muka}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="uang_sisa">Uang Sisa</label>
                                                <input type="number" name="uang_sisa" id="uang_sisa" value="{{$pesananmencargo->uang_sisa}}" class="form-control" value="0" readonly required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="waktu_pesan">Waktu Pesan</label>
                                                <input type="date" name="waktu_pesan" value="{{$pesananmencargo->waktu_pesan}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="tanggal_masuk">Tanggal Masuk</label>
                                                <input type="date" name="tanggal_masuk" value="{{$pesananmencargo->tanggal_masuk}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="jumlah_koli_awal">Jumlah Koli Awal</label>
                                                <input type="number" value="{{$pesananmencargo->jumlah_koli_awal}}" name="jumlah_koli_awal" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="jumlah_koli_packing">Jumlah Koli Packing</label>
                                                <input type="number" value="{{$pesananmencargo->jumlah_koli_packing}}" name="jumlah_koli_packing" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="volume">Volume</label>
                                                <input type="text" value="{{$pesananmencargo->volume}}" name="volume" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="berat">Berat</label>
                                                <input type="number"  value="{{$pesananmencargo->berat}}" name="berat" id="berat" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="dimensi">Dimensi</label>
                                                <input type="number" value="{{$pesananmencargo->dimensi}}" name="dimensi" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="unit">Unit</label>
                                                <input type="number" name="unit" id="unit" value="{{$pesananmencargo->unit}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="kubikasi">Kubikasi</label>
                                                <input type="number"  name="kubikasi" value="{{$pesananmencargo->kubikasi}}" class="form-control" required>
                                            </div>
                                        </div>



                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="jalur">Jalur</label>
                                                <select  name="jalur"  class="form-control js-example-basic-single" >
                                                    <option value="">Pilih Jalur Pengiriman</option>
                                                    <option value="udara" {{$pesananmencargo->jalur=="udara" ? 'selected' : ''}}>Udara</option>
                                                    <option value="laut" {{$pesananmencargo->jalur=='laut' ? 'selected' : ''}}>Laut</option>
                                                    <option value="darat" {{$pesananmencargo->jalur=='darat' ? 'selected' : ''}}>Darat</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="daerah_asal">Daerah Asal</label>
                                                <select  name="daerah_asal" class="form-control js-example-basic-single" >
                                                    <option value="">Pilih Daerah Asal</option>
                                                    @foreach ($data_wilayah as $item)
                                                    <option value="{{$item->id}}" {{ $item->id == $pesananmencargo->daerah_asal ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="daerah_tujuan">Daerah Tujuan</label>
                                                <select name="daerah_tujuan" class="form-control js-example-basic-single">
                                                    <option value="">Pilih Daerah Tujuan</option>
                                                    @foreach ($data_wilayah as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $pesananmencargo->daerah_tujuan ? 'selected' : ''}}>{{$item->nama}}</option>
                                                    @endforeach>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="nama_penerima">Nama Penerima</label>
                                                <input type="text" value="{{$pesananmencargo->nama_penerima}}" class="form-control" name="nama_penerima" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="notelp_penerima">No Telp Penerima</label>
                                                <input type="number" value="{{$pesananmencargo->notelp_penerima}}" class="form-control" name="notelp_penerima" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="diterima_oleh">Diterima Oleh</label>
                                                <input type="text" name="diterima_oleh" value="{{$pesananmencargo->diterima_oleh}}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">

                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="catatan_barang">Catatan Barang</label>
                                                <textarea name="catatan_barang" id="catatan_barang" cols="30" rows="10" required>{{$pesananmencargo->catatan_barang}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="instruksi">Instruksi</label>
                                                <textarea name="instruksi" id="instruksi" cols="30" rows="10">{{$pesananmencargo->instruksi}}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="alamat_detail_tujuan">Alamat Detail Tujuan</label>
                                                <textarea name="alamat_detail_tujuan" id="alamat_detail_tujuan" cols="30" rows="10" required>{{$pesananmencargo->alamat_detail_tujuan}}</textarea>
                                            </div>
                                        </div>

                                </section>
                                <button class="form-control btn-outline-warning">Update</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <script>
            $(document).ready(function() {

                $('#harga_kg_barang, #harga_unit, #harga_diskon, #biaya_tambahan, #total_biaya, #uang_muka, #uang_sisa, #berat, #unit')
                    .on('keyup', function() {
                        var harga_barang = parseFloat($('#harga_kg_barang').val()) || 0;
                        var harga_unit = parseFloat($('#harga_unit').val()) || 0;
                        var harga_diskon = parseFloat($('#harga_diskon').val()) || 0;
                        var biaya_tambahan = parseFloat($('#biaya_tambahan').val()) || 0;
                        var total_biaya = parseFloat($('#total_biaya').val()) || 0;
                        var uang_muka = parseFloat($('#uang_muka').val()) || 0;
                        var uang_sisa = parseFloat($('#uang_sisa').val()) || 0;
                        var berat = parseFloat($('#berat').val()) || 0;
                        var unit = parseFloat($('#unit').val()) || 0;

                        var total_barang = berat * harga_barang;
                        var total_unit = unit * harga_unit;
                        var total_biaya = total_barang + total_unit + biaya_tambahan - harga_diskon;

                        var uang_sisa= uang_muka - total_biaya;

                        // Update total_biaya input field
                        $('#total_biaya').val(total_biaya);

                        $('#uang_sisa').val(uang_sisa);
                    });

            });
        </script>


        @include('partials.partials-dashboard.footer')

    </div>
@endsection
