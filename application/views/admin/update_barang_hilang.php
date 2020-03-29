<!-- load header admin in controller -->

  <div class="card">
    <h4 class="card-title text-center text-white">Update Informasi Barang Hilang</h4>
    <div class="card-body">

      <div class="container">
        <form action="do_upload" class="text-white text-center">
          <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label text-left">Nama Barang: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
          </div>
          <div class="form-group row">
            <label for="lokasi" class="col-sm-2 col-form-label text-left">Keterangan barang temu: </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="keterangan_barang" id="lokasi" cols="30" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="keterangan" class="col-sm-2 col-form-label text-left">Lokasi ditemukan: </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="lokasi_barang">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-left">Tanggal Donasi</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tanggal_barang">
            </div>
          </div>
          <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label text-left">Foto Barang: </label>
            <div class="col-sm-10">
              <input type="file" class="form-control-file" id="foto" name="foto_barang">
            </div>
          </div>

          <button type="submit" class="btn btn-dark">Tambah</button>
        </form>
      </div>
    </div>
  </div>

<!-- load footer admin in controller -->