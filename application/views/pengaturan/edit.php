<?= validation_errors(
    '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
    '</div>'
); ?>


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Ubah nama sistem</h3>
    </div>
    <div class="box-body">
        <form action="<?= base_url('pengaturan/edit') ?>" class="form" method="post">
            <div class="form-group">
                <label for="nama_sistem">Nama sistem</label>
                <input type="text" class="form-control" name="nama_sistem" id="nama_sistem" value="<?= $pengaturan['nama_sistem']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= $pengaturan['email']; ?>">
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $pengaturan['no_hp']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"><?= $pengaturan['alamat'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
    </div>
</div>