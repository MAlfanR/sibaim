<!-- load header admin in controller -->

<div class="card">
    <div class="card-body">
      <h4 class="text-center text-white mb-4">Daftar pengajuan peminjaman</h4>
      <table class="table table-bordered">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No. Tiket</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Barang yang dipinjam</th>
            <th scope="col">Jumlah yang dipinjam</th>
            <th scope="col">Tanggal peminjaman</th>
            <th scope="col">Tanggal pengembalian</th>
            <th scope="col">Instansi</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="t-body">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

      <h4 class="text-center text-white mb-4 mt-5">Daftar Peminjam Barang</h4>
      <table class="table table-bordered">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No. Tiket</th>
            <th scope="col">Nama peminjam</th>
            <th scope="col">Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Instansi</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="t-body">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>

      <h4 class="text-center text-white mb-4 mt-5">List Inventori Masjid</h4>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formInventori">
        Tambah Barang Inventory
      </button>
      <table class="table table-bordered">
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
            <th scope="row"><?= $i; ?></th>
            <td><?= $row['nama_inventory'];?></td>
            <td><?= $row['jumlah_inventory']; ?></td>
            <td><?= $row['harga_inventory']; ?></td>
            <td>
              <a href="" onclick="editModalBarangInventori(<?= $row['id_inventory']; ?>)" class="badge badge-warning" data-toggle="modal" data-target="#formEditInventori">Edit</a>
              <a href="<?= base_url('Update_peminjaman_inventori/delete_inventory/'.$row['id_inventory']); ?>" class="badge badge-danger">Delete</a>
            </td>
            <?php $i++; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>



  <!-- Modal section -->

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
        <form action="<?= base_url('Update_peminjaman_inventori/tambahInventori') ?>" method="post">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label>Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah">
          </div>
          <div class="form-group">
            <label>Biaya Barang</label>
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
        <form action="<?= base_url('Update_peminjaman_inventori/editInventori') ?>" method="post">
          <div class="form-group">
            <input type="hidden" id="id" name="id">
            <label>Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label>Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah">
          </div>
          <div class="form-group">
            <label>Biaya Barang</label>
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
  <!-- End Modal section  -->
<!-- load footer admin in controller -->