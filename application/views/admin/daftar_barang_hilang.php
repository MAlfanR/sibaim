<div class="card">
    <h4 class="card-title text-center text-white">Daftar Barang Hilang</h4>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="t-head">
                <tr class="text-white">
                    <td>Barang</td>
                    <td>Tanggal ditemukan</td>
                    <td>Lokasi ditemukan</td>
                    <td>Keterangan</td>
                    <td>Foto</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody class="t-body">
                <?php foreach($barang as $row): ?>
                    <tr>
                        <td><?= $row['nama_barangtemu']; ?></td>
                        <td><?= $row['tanggal_barangtemu']; ?></td>
                        <td><?= $row['lokasi_barangtemu']; ?></td>
                        <td><?= $row['keterangan_barangtemu']; ?></td>
                        <td><button class="badge badge-pill badge-primary btnFoto" onclick="fotoModal('<?= $row['nama_barangtemu']; ?>','<?= $row['foto_barangtemu']; ?>')" data-toggle="modal" data-target="#fotoModal">Lihat Foto</button></td>
                        <td>
                            <a class="badge badge-pill badge-warning" href="">Edit</a>
                            <a class="badge badge-pill badge-danger" href="<?= base_url('Daftar_barang_hilang/hapus_barang/'.$row['id_barangtemu'].'/'.$row['foto_barangtemu']); ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
