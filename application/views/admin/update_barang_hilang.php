<!-- load header admin in controller -->
  <div class="card">
    <h4 class="card-title text-center text-white">Update Informasi Barang Hilang</h4>
    <div class="card-body">
      <!-- notifikasi input database -->
      <?= $this->session->flashdata('flash'); ?>
      
      <div class="container">
        <form action="<?= base_url('Update_barang_hilang/insert_barang_hilang'); ?>" method="post" enctype="multipart/form-data" class="text-white text-center">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Nama Barang: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Keterangan barang temu: </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="keterangan_barang" cols="30" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Lokasi ditemukan: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="lokasi_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Tanggal Ditemukan: </label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tanggal_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Foto: </label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file" name="foto">
            </div>
          </div>
          <button type="submit" value="upload" class="btn btn-dark">Tambah</button>
        </form>
        <a href="<?= base_url('Daftar_barang_hilang'); ?>" class="btn btn-dark float-right">Lihat Daftar Barang Hilang</a>
      </div>
    </div>
  </div>

<!-- load footer admin in controller -->