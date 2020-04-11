
  <div class="card text-white">
    <div class="card-title text-center">
      <h2>Form Pengajuan Peminjaman Barang Masjid</h2>
    </div>
    
    <div class="container">
      <form action="<?= base_url('Form_peminjaman/addDataBaru'); ?>" method="post">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Judul Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Penyelenggara Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="penyelenggara">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Penanggung Jawab Kegiatan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="penanggung">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">No. HP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="hp">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jaminan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jaminan">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Lokasi Alat Digunakan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="lokasi">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Tanggal Penyewaan</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="tglSewa">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Tanggal Pengembalian</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name="tglKembali">
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-dark mb-4">Lanjut memilih barang</button>
        </div>
      </form>
    </div>
  </div>