<!-- navigasi -->
<div>
  <a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3 ml-3">Kembali ke menu</a>
  <a href="<?= base_url('Update_peminjaman_inventori'); ?>" class="btn btn-danger mb-3">Daftar Pengajuan Peminjaman</a>
  <a href="<?= base_url('Daftar_peminjam'); ?>" class="btn btn-danger mb-3">Daftar Peminjam</a>
</div>

<?= $this->session->flashdata('flash'); ?>

<div class="card">
  <div class="container">
    <h5 class="text-white text-center mb-0 mt-3">Barang Inventori</h5>
    <button type="button" class="btn btn-primary mb-3 mt-4" data-toggle="modal" data-target="#formInventori">
        Tambah Barang Inventory
    </button>

    <table id="table_id3" class="table table-bordered">
      <thead class="t-head">
        <tr class="text-white">
          <th scope="col">No.</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jumlah Barang</th>
          <th scope="col">Biaya per/hari</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="t-body">
      <?php $i=1; foreach($inventori as $row): ?>
        <tr>
          <td scope="row"><?= $i; ?></td>
          <td><?= $row['nama_inventory'];?></td>
          <td><?= $row['jumlah_inventory']; ?></td>
          <td><?= $row['harga_inventory']; ?></td>
          <td>
            <a href="" onclick="editModalBarangInventori(<?= $row['id_inventory']; ?>)" class="badge badge-warning" data-toggle="modal" data-target="#formEditInventori">Edit</a>
            <a href="<?= base_url('Update_peminjaman_inventori/delete_inventory/'.$row['id_inventory']); ?>" class="badge badge-danger">Delete</a>
          </td>
        </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
      </tbody>
    </table>
    
  </div>
</div>

<!-- Tambah inventori masjid -->
<div class="modal fade" id="formInventori" tabindex="-1" role="dialog" aria-labelledby="formInventoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formInventoriLabel">Tambah Inventori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('List_inventori/tambahInventori') ?>" method="post">
          <div class="form-group">
            <label class="text-dark">Nama Barang</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label class="text-dark">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah">
          </div>
          <div class="form-group">
            <label class="text-dark">Biaya Barang</label>
            <input type="number" class="form-control" name="biaya">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- End Tambah inventori masjid -->

<!-- Edit inventori masjid -->
<div class="modal fade" id="formEditInventori" tabindex="-1" role="dialog" aria-labelledby="formInventoriLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formInventoriLabel">Edit Inventori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('List_inventori/editInventori') ?>" method="post">
          <div class="form-group">
            <input type="hidden" id="id" name="id">
            <label class="text-dark">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label class="text-dark">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah">
          </div>
          <div class="form-group">
            <label class="text-dark">Biaya Barang</label>
            <input type="number" class="form-control" id="biaya" name="biaya">
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
<!-- End Edit inventori masjid -->