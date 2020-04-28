<div class="container">

  <!-- navigasi -->
  <div>
    <a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3">Kembali ke menu</a>
    <a href="<?= base_url('Update_donasi'); ?>" class="btn btn-danger mt-0 mb-3">Tambah Donasi</a>
  </div>

<?= $this->session->flashdata('flash'); ?>

  <div class="card p-4">
    <h4 class="text-white text-center mb-3">Tabel Donasi</h4>
    <table class="table table-bordered" id="table_id">
      <thead class="t-head text-white">
        <tr>
          <td>Nama Donatur</td>
          <td>Tanggal Donasi</td>
          <td>Jumlah Donasi</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
      <?php foreach($donasi as $row): ?>
        <tr>
          <td><?= $row['nama_donasi']; ?></td>
          <td><?= $row['tanggal_donasi']; ?></td>
          <td><?= number_format($row['jumlah_donasi'],2,',','.'); ?></td>
          <td>
            <a href="#" onclick="getDataDonasi(<?= $row['id_donasi']; ?>)" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#exampleModal">Edit</a>
            <a href="<?= base_url('Tabel_donasi/delete/'.$row['id_donasi']); ?>" class="badge badge-pill badge-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Donasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('Tabel_donasi/editDonasi'); ?>" method="POST">
            <input type="hidden" name="id_donasi" id="id_donasi" value="">
            <div class="form-group">
              <label class="text-dark">Nama Donatur</label>
              <input type="text" id="nama_donasi" name="nama_donasi" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-dark">Tanggal Donasi</label>
              <input type="date" id="tanggal_donasi" name="tanggal_donasi" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-dark">Jumlah Donasi</label>
              <input type="number" id="jumlah_donasi" name="jumlah_donasi" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>