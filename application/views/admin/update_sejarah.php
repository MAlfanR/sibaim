<div>
<a href="<?= base_url('Admin'); ?>" class="btn btn-danger mt-0 mb-3 ml-4">Kembali ke menu</a>
</div>

<div class="card">
<h4 class="text-white text-center m-4">Update Sejarah</h4>
<div class="container p-4 mb-4" style="background-color: #E5E5E5;">
                <?= $this->session->flashdata('foto'); ?>
                <form class="form-inline" action="<?= base_url('Update_sejarah/foto'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="label" value="Sejarah">
                    <div class="form-group">
                        <label for="fotoSejarah" class="text-dark">Foto</label>
                        <input type="file" class="form-control-file" id="fotoSejarah" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                </form>
                <form action="<?= base_url('Update_sejarah/teks'); ?>" method="POST">
                <?= $this->session->flashdata('teks'); ?>
                    <input type="hidden" name="label" value="Sejarah">
                    <div class="form-group">
                        <label for="teksSejarah" class="text-dark">Teks Paragraf</label>
                        <textarea class="form-control" id="teksSejarah" rows="6" name="teks"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
    </div>
</div>
