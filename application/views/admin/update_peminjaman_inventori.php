<!-- navigasi -->
<div>
  <a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3 ml-3">Kembali ke menu</a>
  <a href="<?= base_url('Daftar_peminjam'); ?>" class="btn btn-danger mb-3">Daftar Peminjam</a>
  <a href="<?= base_url('List_inventori'); ?>" class="btn btn-danger mb-3">List Inventori</a>
</div>

<div class="card">
  <h5 class="text-white text-center mb-0 mt-3">Daftar Pengajuan Peminjaman</h5>
  <div class="mt-1 p-4">
    <table id="table_id" class="table table-bordered text-center">
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
          <td>
            <a href="" onclick="detailModalBarang(<?= $row['id_peminjaman']; ?>)" class="badge badge-primary badge-pill" data-toggle="modal" data-target="#detailBarang">detail</a>
          </td>
          <td>
            <a href="" onclick="detailModalTanggal(<?= $row['id_peminjaman']; ?>)" class="badge badge-warning badge-pill" data-toggle="modal" data-target="#detailTanggal">detail</a>
          </td>
          <td><?= $row['denda_peminjaman'] + $row['total_harga']; ?></td>
          <td><?= $row['status_permintaan']; ?></td>
          <td>
            <a href="<?= base_url('Update_peminjaman_inventori/diterima/'.$row['id_peminjaman']); ?>" class="badge badge-success badge-pill">diterima</a>
            <a href="<?= base_url('Update_peminjaman_inventori/ditolak/'.$row['id_peminjaman']); ?>" class="badge badge-danger badge-pill">ditolak</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

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