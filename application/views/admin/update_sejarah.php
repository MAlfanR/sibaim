<ul class="nav nav-tabs bg-merah" id="myTab" role="tablist" style="background-color: rgba(133, 49, 43, 0.8);">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#sejarah" role="tab" aria-controls="home" aria-selected="true">Update Sejarah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#organisasi" role="tab" aria-controls="profile" aria-selected="false">Update Organisai</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="sejarah" role="tabpanel" aria-labelledby="home-tab">
      <div class="card">
        <div class="card-body">
            <div class="container p-4" style="background-color: #E5E5E5;">
                <form class="form-inline" action="<?= base_url('Update_sejarah/foto'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="label" value="Sejarah">
                    <div class="form-group">
                        <label for="fotoSejarah">Foto</label>
                        <input type="file" class="form-control-file" id="fotoSejarah" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                </form>
                <form action="<?= base_url('Update_sejarah/teks'); ?>" method="POST">
                    <input type="hidden" name="label" value="Sejarah">
                    <div class="form-group">
                        <label for="teksSejarah">Teks Paragraf</label>
                        <textarea class="form-control" id="teksSejarah" rows="6" name="teks"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="profile-tab">
        <div class="card">
            <div class="card-body">
                <div class="container p-4" style="background-color: #E5E5E5;">
                    <form class="form-inline" action="<?= base_url('Update_sejarah/foto'); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="label" value="Organisasi">
                        <div class="form-group">
                            <label for="fotoOrganisasi">Foto</label>
                            <input type="file" class="form-control-file" id="fotoOrganisasi" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </form>
                    <form action="<?= base_url('Update_sejarah/teks'); ?>" method="POST">
                        <input type="hidden" name="label" value="Organisasi">
                        <div class="form-group">
                            <label for="teksOrganisasi">Teks Paragraf</label>
                            <textarea class="form-control" id="teksOrganisasi" rows="6" name="teks"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
       </div>
   </div>
</div>