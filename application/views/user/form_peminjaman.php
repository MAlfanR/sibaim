
  <div class="card text-white">
    <div class="card-title text-center">
      <h2>Form Pengajuan Peminjaman Barang Masjid</h2>
    </div>
    
    <div class="card-body">
      <div class="container">
      <form action="<?= base_url('Form_peminjaman/new_form'); ?>" enctype="multipart/form-data" method="POST">
        
        <div class="form-group">
          <label>Judul Kegiatan</label>
          <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
          <label>Penyelenggara Kegiatan</label>
          <input type="text" class="form-control" name="penyelenggara">
        </div>
        <div class="form-group">
          <label>Penanggung Jawab Kegiatan</label>
          <input type="text" class="form-control" name="penanggung_jawab">
        </div>
        <div class="form-group">
          <label>Nomor HP</label>
          <input type="text" class="form-control" name="hp">
        </div>
        <div class="form-group">
          <label>Jaminan</label>
          <input type="text" class="form-control" name="jaminan">
        </div>
        <div class="form-group">
          <label>Barang</label>
          <select class="custom-select">
            <option name="br_1" value="1">1</option>
            <option name="br_2" value="2">2</option>
            <option name="br_3" value="3">3</option>
            <option name="br_4" value="4">4</option>
          </select>
          <label>Jumlah</label>
          <select name="jumlah" class="custom-select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input type="text" class="form-control" name="lokasi">
        </div>
        <div class="form-group">
          <label>Tanggal Peminjaman</label>
          <input type="date" class="form-control" name="peminjaman">
        </div>
        <div class="form-group">
          <label>Tanggal Pengembalian</label>
          <input type="date" class="form-control" name="pengembalian">
        </div>
        <button type="submit" class="btn bg-dark text-white">Buat Pengajuan</button>
      </form>
      </div>
    </div>
  </div>
</div>