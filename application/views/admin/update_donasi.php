<!-- navigasi -->

  <div>
    <a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3 ml-4">Kembali ke menu</a>
    <a href="<?= base_url('Tabel_donasi'); ?>" class="btn btn-danger mt-0 mb-3">Lihat Tabel Donasi</a>
  </div>

  <div class="container-fluid p-0">
    <div class="card text-white">
      <div class="card-title text-center mt-3">
        <h2>Update Donasi</h2>
      </div>
      <?= $this->session->flashdata('flash'); ?>
      <div class="card-body">
        <form class="text-center" action="<?= base_url('Update_donasi/act_update_donasi'); ?>" method="POST">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label ">
              <h5 class="text-left">Nama Donasi</h5>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama_donasi">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label ">
              <h5 class="text-left">Jumlah Donasi</h5>
            </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="donasi" onkeyup="hitung_total(<?= $total_donasi_langsung; ?>, <?= $value_total_donasi; ?>)" name="jumlah_donasi">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label ">
              <h5 class="text-left">Tanggal Donasi</h5>
            </label>
            <div class="col-sm-9">
              <input type="date" class="form-control" name="tanggal_donasi">
            </div>
          </div>

          <br>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label ">
              <h5 class="text-left">Total donasi kitabisa</h5>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="total_donasi_kitabisa" value="<?= $donasi_kitabisa; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label ">
              <h5 class="text-left">Total donasi langsung</h5>
            </label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="total_donasi" value="<?= $value_total_donasi; ?>" name="total_donasi_langsung" readonly>
            </div>
          </div>

          <button type="submit" class="btn bg-dark text-white">Tambah</button>
        </form>
      </div>
    </div>
  </div>
