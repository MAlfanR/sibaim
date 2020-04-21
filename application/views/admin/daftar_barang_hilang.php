<!-- navigasi -->
<div>
  <a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3 ml-3">Kembali ke menu</a>
  <a href="<?= base_url('Update_barang_hilang'); ?>" class="btn btn-danger mt-0 mb-3">Tambah Data Barang Hilang</a>
</div> 
<!--  -->

<!-- main -->
<div class="card">
  <h4 class="card-title text-center text-white">Daftar Barang Hilang</h4>

  <!-- flashdata -->
  <?= $this->session->flashdata('edit'); ?>
  <?= $this->session->flashdata('delete'); ?>

  <div class="card-body">

    <!-- table -->
    <table id="table_id" class="table table-bordered">
      <thead class="t-head">
        <tr class="text-white">
          <th>Barang</th>
          <th>Tanggal ditemukan</th>
          <th>Lokasi ditemukan</th>
          <th>Keterangan</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="t-body">
      <?php foreach($barang as $row): ?>
        <tr>
          <td><?= $row['nama_barangtemu']; ?></td>
          <td><?= $row['tanggal_barangtemu']; ?></td>
          <td><?= $row['lokasi_barangtemu']; ?></td>
          <td><?= $row['keterangan_barangtemu']; ?></td>
          <td>
            <button class="badge badge-pill badge-primary btnFoto" onclick="fotoModalBarangHilang('<?= $row['nama_barangtemu']; ?>','<?= $row['foto_barangtemu']; ?>')" data-toggle="modal" data-target="#fotoModal">Lihat Foto</button>
          </td>
          <td>
            <a class="badge badge-pill badge-warning btnEdit" href="<?= $row['id_barangtemu']; ?>" data-toggle="modal" data-target="#exampleModal" onclick="editModalBarangHilang(<?= $row['id_barangtemu']; ?>)">Edit</a>

            <a class="badge badge-pill badge-danger" href="<?= base_url('Daftar_barang_hilang/hapus_barang/'.$row['id_barangtemu'].'/'.$row['foto_barangtemu']); ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <!-- end table -->

  </div>

</div>

<!-- modal foto -->
<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" alt="" style="height: 300px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal foto -->

<!-- modal edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- form -->
        <form action="<?= base_url('Daftar_barang_hilang/editData'); ?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label>Tanggal Ditemukan</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="form-group">
            <label>Lokasi Ditemukan</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan">
          </div>
          <div class="form-group">
            <label>Foto Barang</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
          </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal edit -->
