
  <div class="card text-white">
    <div class="card-title text-center">
      <h2>Form Pengajuan Peminjaman Barang Masjid</h2>
    </div>
    
    <div class="card-body">
      <form class="text-center" action="<?= base_url('user/form_peminjaman'); ?>" method="POST">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Nama Peminjam</h5></label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="nama_peminjam">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Barang yang dipinjam</h5></label>
          <div class="col-sm-2">
            <input type="text" class="form-control"  name="barang_yang_dipinjam"> </div>
            <label class="col-sm-0 col-form-label "><h5 class="text-center">Jumlah</h5></label>
            <div class="col-sm-2">
            <input type="number" class="form-control"  name="jumlah">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Tanggal Peminjaman</h5></label>
          <div class="col-sm-2">
            <input type="date" class="form-control"  name="tanggal_peminjaman">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Instansi</h5></label>
          <div class="col-sm-2">
            <input type="text" class="form-control"  name="instansi">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Keperluan</h5></label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  name="keperluan">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label "><h5 class="text-center">Jaminan</h5></label>
          <div class="col-sm-4">
            <input type="text" class="form-control"  name="jaminan">
          </div>
        </div>
        <button type="submit" class="btn bg-dark text-white">Buat Pengajuan</button>
      </form>
    </div>
  </div>
</div>