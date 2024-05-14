<div>
    <section class="section">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="stt">STT</label>
                    <input type="number" id="stt" name="stt" class="form-control" required autofocus>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="resi">Resi</label>
                    <input type="text" id="stt" name="stt" class="form-control" required autofocus>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="customer_id"> Customer</label>
                    <select data-pharaonic="select2" name="customer_id" id="customer_id" data-component-id="{{ $this->getId() }}" class="form-control">
                        <option value="EG">Egypt</option>
                        <option value="TW">Taiwan</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="metode_pembayaran_id">Metode Pembayaran</label>
                    <select data-pharaonic="select2" data-component-id="{{ uniqid() }}" class="form-control">
                        <option value="">Semua</option>
                    </select>
                </div>
            </div>


            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="status_pemabayaran">Status Pembayaran</label>
                    <select data-pharaonic="select2" data-component-id="{{ uniqid() }}" class="form-control">
                        <option value="">Semua</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_kg_barang">Harga Barang (KG)</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_unit">Harga Unit</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="harga_diskon">Harga Diskon</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="biaya_tambahan">Biaya Tambahan</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="total_biaya">Total Biaya</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="uang_muka">Uang Muka</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="uang_sisa">Uang Sisa</label>
                    <input type="number" class="form-control" readonly>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="waktu_pesan">Waktu Pesan</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jumlah_koli_awal">Jumlah Koli Awal</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jumlah_koli_packing">Jumlah Koli Packing</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="volume">Volume</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="dimensi">Dimensi</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="unit">Unit</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="kubikasi">Kubikasi</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="instruksi">Instruksi</label>
                    <input type="number" class="form-control">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="jalur">Jalur</label>
                    <select name="jalur" id="jalur" class="form-control">
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
                    <select name="daerah_asal" id="daerah_asal" class="form-control">
                        <option value="">Pilih Daerah Asal</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="daerah_tujuan">Daerah Tujuan</label>
                    <select name="daerah_asal" id="daerah_tujuan" class="form-control">
                        <option value="">Pilih Daerah Tujuan</option>
                    </select>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="alamat_detail_tujuan">Alamat Detail Tujuan</label>
                    <textarea name="alamat_detail_tujuan" id="alamat_detail_tujuan" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="nama_penerima">Nama Penerima</label>
                    <input type="text" class="form-control" name="nama_penerima">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="notelp_penerima">No Telp Penerima</label>
                    <input type="number" class="form-control" name="notelp_penerima">
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="form-group">
                    <label for="diterima_oleh">Diterima Oleh</label>
                    <input type="text" name="diterima_oleh" class="form-control">
                </div>
            </div>



        </div>
    </section>
</div>
