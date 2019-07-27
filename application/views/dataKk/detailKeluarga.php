<div class="box">
    <div class="box-body box-profile">
        <h3 class="profile-username text-center"><?= $penduduk['nama']; ?></h3>

        <p class="text-muted text-center"><?= $penduduk['status_hubungan_dalam_keluarga']; ?></p>

        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Nik</b>
                <p class="pull-right"><?= $penduduk['nik']; ?></p>
            </li>
            <li class="list-group-item">
                <b>No KK</b>
                <p class="pull-right"><?= $penduduk['no_kk']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Jenis Kelamin</b>
                <p class="pull-right"><?= $penduduk['jenis_kelamin']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Tempat Lahir</b>
                <p class="pull-right"><?= $penduduk['tempat_lahir']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Tanggal Lahir</b>
                <p class="pull-right"><?= $penduduk['tanggal_lahir']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Agama</b>
                <p class="pull-right"><?= $penduduk['agama']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Status Perkawinan</b>
                <p class="pull-right"><?= $penduduk['status_perkawinan']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Pekerjaan</b>
                <p class="pull-right"><?= $penduduk['pekerjaan']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Agama</b>
                <p class="pull-right"><?= $penduduk['agama']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Kewarganegaraan</b>
                <p class="pull-right"><?= $penduduk['kewarganegaraan']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Pendidikan</b>
                <p class="pull-right"><?= $penduduk['pendidikan']; ?></p>
            </li>
            <li class="list-group-item">
                <b>No Passpor</b>
                <p class="pull-right"><?= $penduduk['no_passpor']; ?></p>
            </li>
            <li class="list-group-item">
                <b>NO Kitas/Kitap</b>
                <p class="pull-right"><?= $penduduk['no_kitas_kitap']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Ayah</b>
                <p class="pull-right"><?= $penduduk['ayah']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Ibu</b>
                <p class="pull-right"><?= $penduduk['ibu']; ?></p>
            </li>
            <a href="<?= base_url('penduduk/edit/') . $penduduk['id']; ?>" class="btn btn-primary btn-block mt-2 "><b>Ubah</b></a>
    </div>
    </ul>
</div>
</div>