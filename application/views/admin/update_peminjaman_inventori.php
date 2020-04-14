<!-- load header admin in controller -->

<div class="card">
<!-- Navigasi Tab -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Daftar Pengajuan Pinjaman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Daftar yang sedang meminjam</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">List inventori</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><table id="table_id" class="table table-bordered mt-4 text-center">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No. Tiket</th>
            <th scope="col">Judul Kegiatan</th>
            <th scope="col">Penyelenggara</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">No Hp</th>
            <th scope="col">Barang</th>
            <th scope="col">Durasi</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="t-body">
        <?php foreach($proposal_peminjaman as $row): ?>
          <tr>
            <td scope="row"><?= $row['id_peminjaman']; ?></td>
            <td><?= $row['judul_kegiatan']; ?></td>
            <td><?= $row['penyelenggara_kegiatan']; ?></td>
            <td><?= $row['penanggung_jawab']; ?></td>
            <td><?= $row['noHp'] ?></td>
            <td><a href="" onclick="detailModalBarang(<?= $row['id_peminjaman']; ?>)" class="badge badge-primary badge-pill" data-toggle="modal" data-target="#detailBarang">detail</a></td>
            <td><a href="" onclick="detailModalTanggal(<?= $row['id_peminjaman']; ?>)" class="badge badge-warning badge-pill" data-toggle="modal" data-target="#detailTanggal">detail</a></td>
            <td><?= $row['denda_peminjaman'] + $row['total_harga']; ?></td>
            <td><?= $row['status_permintaan']; ?></td>
            <td>
              <a href="<?= base_url('Update_peminjaman_inventori/diterima/'.$row['id_peminjaman']); ?>" class="badge badge-success badge-pill">diterima</a>
              <a href="<?= base_url('Update_peminjaman_inventori/ditolak/'.$row['id_peminjaman']); ?>" class="badge badge-danger badge-pill">ditolak</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><table id="table_id2" class="table table-bordered mt-4 text-center">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No. Tiket</th>
            <th scope="col">Judul Kegiatan</th>
            <th scope="col">Penyelenggara</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">No Hp</th>
            <th scope="col">Barang</th>
            <th scope="col">Durasi</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="t-body">
        <?php foreach($peminjaman as $row):?>
          <tr>
            <td scope="row"><?= $row['id_peminjaman']; ?></td>
            <td><?= $row['judul_kegiatan']; ?></td>
            <td><?= $row['penyelenggara_kegiatan']; ?></td>
            <td><?= $row['penanggung_jawab']; ?></td>
            <td><?= $row['noHp']; ?></td>
            <td><a href="" onclick="detailModalBarang(<?= $row['id_peminjaman']; ?>)" class="badge badge-primary badge-pill" data-toggle="modal" data-target="#detailBarang">detail</a></td>
            <td><a href="" onclick="detailModalTanggal(<?= $row['id_peminjaman']; ?>)" class="badge badge-warning badge-pill" data-toggle="modal" data-target="#detailTanggal">detail</a></td>
            <td><?= $row['denda_peminjaman'] + $row['total_harga']; ?></td>
            <td><?= $row['status_permintaan']; ?></td>
            <td><?php if($row['status_permintaan'] == 'diterima'){?>
              <a href="<?= base_url('Update_peminjaman_inventori/deletePeminjaman/'.$row['id_peminjaman']); ?>" class="badge badge-pill badge-success">telah dikembalikan</a>
            <?php }else if($row['status_permintaan'] == 'ditolak'){?>
              <a href="<?= base_url('Update_peminjaman_inventori/deletePeminjaman/'.$row['id_peminjaman']); ?>" class="badge badge-pill badge-danger">hapus</a>
            <?php }?>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
            <?php $i++; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>
<!-- End Navigasi Tab -->
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

<!-- Modal detail barang -->
<div class="modal fade" id="detailBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-dark">
            <thead>
              <tr>
                <td>No</td>
                <td>Jenis Barang</td>
                <td>Jumlah</td>
              </tr>
            </thead>
            <tbody id="bodyDetailBarang">
              <tr>
                <td>x</td>
                <td>x</td>
                <td>x</td>
              </tr>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal detail barang -->

<!-- Modal tanggal -->
<div class="modal fade" id="detailTanggal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tanggal Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label>Tanggal Peminjaman</label>
        <input id="inputTglPinjam" type="date" class="form-control" value="" readonly>
        <label>Tanggal Pengembalian</label>
        <input id="inputTglKembali" type="date" class="form-control" value="" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal tanggal -->

  <!-- End Modal section  -->
<!-- load footer admin in controller -->