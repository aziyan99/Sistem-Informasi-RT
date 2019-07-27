<?= validation_errors(
    '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
    '</div>'
); ?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah Data Penduduk</h3>
    </div>
    <div class="box-body">
        <form action="<?= base_url('penduduk/add'); ?>" method="post" class="form" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nik</label>
                <input type="text" name="nik" class="form-control" value="<?= set_value('nik'); ?>">
            </div>
            <div class="form-group">
                <label>No KK</label>
                <input type="text" name="no_kk" class="form-control" value="<?= set_value('no_kk'); ?>">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option></option>
                    <option>Laki Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <textarea class="form-control" name="tempat_lahir" cols="30" rows="10"><?= set_value('tempat_lahir'); ?></textarea>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir'); ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" cols="30" rows="10" class="form-control"><?= set_value('alamat'); ?></textarea>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control">
                    <option></option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Khong Hucu</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status Perkawinan</label>
                <select name="status_perkawinan" class="form-control">
                    <option></option>
                    <option>Belum Kawin</option>
                    <option>Kawin</option>
                    <option>Cerai Hidup</option>
                    <option>Cerai Mati</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" value="<?= set_value('pekerjaan'); ?>">
            </div>
            <div class="form-group">
                <label>Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" class="form-control" value="<?= set_value('kewarganegaraan'); ?>">
            </div>
            <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control">
                    <option></option>
                    <option>Tidak/Belum Sekolah</option>
                    <option>Tidak Tamat SD/Sederajat</option>
                    <option>Tamat SD/Sederajat</option>
                    <option>SLTP/Sederajat</option>
                    <option>SLTA/Sederajat</option>
                    <option>Diploma I/II</option>
                    <option>Akademi/Diploma III/S. Muda</option>
                    <option>Diploma IV/Strata I</option>
                    <option>Strata II</option>
                    <option>Strata III</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status Hubungan Dalam Keluarga</label>
                <select name="status_hubungan_dalam_keluarga" class="form-control">
                    <option></option>
                    <option>Kepala Keluarga</option>
                    <option>Istri</option>
                    <option>Anak</option>
                    <option>Menantu</option>
                    <option>Cucu</option>
                    <option>Orang Tua</option>
                    <option>Mertua</option>
                    <option>Famili Lain</option>
                    <option>Pembantu</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label>No Passpor</label>
                <input type="text" name="no_passpor" class="form-control" value="<?= set_value('no_passpor'); ?>">
            </div>
            <div class="form-group">
                <label>No Kitas/Kitap</label>
                <input type="text" name="no_kitas_kitap" class="form-control" value="<?= set_value('no_kitas_kitap'); ?>">
            </div>
            <div class="form-group">
                <label>Nama Ayah</label>
                <input type="text" name="ayah" class="form-control" value="<?= set_value('ayah'); ?>">
            </div>
            <div class="form-group">
                <label>Nama Ibu</label>
                <input type="text" name="ibu" class="form-control" value="<?= set_value('ibu'); ?>">
            </div>
            <div class="form-group">
                <label>Pas Foto</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>

        </form>
    </div>
</div>