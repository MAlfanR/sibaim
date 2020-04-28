
    <div class="card">
    <?= $this->session->flashdata('flash'); ?>
        <form action="<?= base_url('Profile/ubahProfile'); ?>" method="post" class="m-5">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?= $_SESSION['name']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?= $_SESSION['username']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="<?= $_SESSION['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kontak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kontak" value="<?= $_SESSION['kontak']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="<?= $_SESSION['password']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Re-Type Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="rePassword" value="<?= $_SESSION['password']; ?>">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" onclick="alert('Yakin merubah data ?')" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
