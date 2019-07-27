<?= $this->session->flashdata('message'); ?>


<div class="box">
    <div class="box-body">
        <a href="<?= base_url('penduduk/add'); ?>" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i> Tambah</a>
    </div>
</div>

<div class="box">
    <div class="box-header">
        <div class="box-title">Data Penduduk</div>
    </div>
    <div class="box-body">
        <table id="example3" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No KK</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Kewarganegaraan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $x = 1;
                foreach ($penduduk as $p) : ?>
                    <tr>
                        <td><?= $x++; ?></td>
                        <td><?= $p['no_kk']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['kewarganegaraan']; ?></td>
                        <td>
                            <a href="<?= base_url('kartu_keluarga/detail/') . $p['no_kk'] ?>" class="btn btn-flat btn-xs btn-primary"> <i class="glyphicon glyphicon-eye-open"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>