<div>
    <section class="section">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="stt">STT</label>
                    <input type="number" id="stt" name="stt" class="form-control" value="{{old('stt')}}" required autofocus>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="resi">Resi</label>
                    <input type="text" id="resi" name="resi" class="form-control" value="{{old('resi')}}" required autofocus>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="customer_id"> Customer</label>
                    <select data-pharaonic="select2" name="customer_id" id="customer_id"
                    data-component-id="{{ $this->getId() }}" class="form-control" value="{{old('customer_id')}}" required autofocus>
                        <option value="">Pilih Customer</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="metode_pembayaran_id">Metode Pembayaran</label>
                    <select data-pharaonic="select2" name="metode_pembayaran_id" value="{{old('metode_pembayaran_id')}}" data-component-id="{{ $this->getId() }}"
                    class="form-control" required>
                        <option value="">Pilh Metode Pembayaran</option>
                    </select>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="status_pembayaran_id">Status Pembayaran</label>
                    <select data-pharaonic="select2" name="status_pembayaran_id" value="{{old('status_pembayaran_id')}}" data-component-id="{{ uniqid() }}" class="form-control" required>
                        <option value="">Semua</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_kg_barang">Harga Barang (KG)</label>
                    <input type="number" name="harga_kg_barang" value="{{old('harga_kg_barang')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_unit">Harga Unit</label>
                    <input type="number" name="harga_unit" value="{{old('harga_unit')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_diskon">Harga Diskon</label>
                    <input type="number" name="harga_diskon" value="{{old('harga_diskon')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="biaya_tambahan">Biaya Tambahan</label>
                    <input type="number" name="biaya_tambahan" value="{{old('biaya_tambahan')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="total_biaya">Total Biaya</label>
                    <input type="number" name="total_biaya" value="{{old('total_biaya')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="uang_muka">Uang Muka</label>
                    <input type="number" name="uang_muka" value="{{old('uang_muka')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="uang_sisa">Uang Sisa</label>
                    <input type="number" name="uang_sisa" value="{{old('uang_sisa')}}" class="form-control" readonly value="0">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="waktu_pesan">Waktu Pesan</label>
                    <input type="date" name="waktu_pesan" value="{{old('waktu_pesan')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" value="{{old('tanggal_masuk')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jumlah_koli_awal">Jumlah Koli Awal</label>
                    <input type="number" value="{{old('jumlah_koli_awal')}}" name="jumlah_koli_awal" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jumlah_koli_packing">Jumlah Koli Packing</label>
                    <input type="number" value="{{old('jumlah_koli_packing')}}" name="jumlah_koli_packing" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="volume">Volume</label>
                    <input type="text" value="{{old('volume')}}" name="volume" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="number"  value="{{old('berat')}}" name="berat" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="dimensi">Dimensi</label>
                    <input type="number" value="{{old('dimensi')}}" name="dimensi" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="number" name="unit" value="0" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="kubikasi">Kubikasi</label>
                    <input type="number"  name="kubikasi" value="0" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="instruksi">Instruksi</label>
                    <input type="text" name="instruksi" value="{{old('instruksi')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jalur">Jalur</label>
                    <select name="jalur" id="jalur" class="form-control" required>
                        <option value="">Pilih Jalur</option>
                        <option value="darat">Darat</option>
                        <option value="laut">Laut</option>
                        <option value="udara">Udara</option>
                    </select>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="daerah_asal">Daerah Asal</label>
                    <select name="daerah_asal" id="daerah_asal" class="form-control" required>
                        <option value="">Pilih Daerah Asal</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="daerah_tujuan">Daerah Tujuan</label>
                    <select name="daerah_tujuan" id="daerah_tujuan" class="form-control" required>
                        <option value="">Pilih Daerah Tujuan</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="alamat_detail_tujuan">Alamat Detail Tujuan</label>
                    <textarea name="alamat_detail_tujuan" id="alamat_detail_tujuan" cols="30" rows="10" required>
                        {{old('alamat_detail_tujuan')}}
                    </textarea>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_penerima">Nama Penerima</label>
                    <input type="text" value="{{old('nama_penerima')}}" class="form-control" name="nama_penerima" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="notelp_penerima">No Telp Penerima</label>
                    <input type="number" value="{{old('notelp_penerima')}}" class="form-control" name="notelp_penerima" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="diterima_oleh">Diterima Oleh</label>
                    <input type="text" name="diterima_oleh" value="{{old('diterima_oleh')}}" class="form-control" required>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="catatan_barang">Catatan Barang</label>
                    <textarea name="catatan_barang" id="catatan_barang" cols="30" rows="10" required>
                        {{old('catatan_barang')}}
                    </textarea>
                </div>
            </div>

        </div>
    </section>
</div>
