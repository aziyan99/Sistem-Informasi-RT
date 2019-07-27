<div class="box">
    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/penduduk/') . $penduduk['gambar']; ?>" alt="User profile picture">
        <h3 class="profile-username text-center"><?= $penduduk['nama']; ?></h3>

        <p class="text-muted text-center"><?= $penduduk['pekerjaan']; ?></p>

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
                <b>Agama</b>
                <p class="pull-right"><?= $penduduk['agama']; ?></p>
            </li>
            <li class="list-group-item">
                <b>Kewarganegaraan</b>
                <p class="pull-right"><?= $penduduk['kewarganegaraan']; ?></p>
            </li>
        </ul>
        <!-- <a href="<?= base_url('penduduk/ubahPasFoto/') . $penduduk['id']; ?>" class="btn btn-primary btn-block">Tambah Pas Foto</a> -->
    </div>
</div>