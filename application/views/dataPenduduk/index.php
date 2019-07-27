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
                    <th>Nik</th>
                    <th>Nama</th>
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
                        <td><?= $p['nik']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['kewarganegaraan']; ?></td>
                        <td>
                            <a href="<?= base_url('penduduk/edit/') . $p['id']; ?>" class="btn btn-flat btn-xs  btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a onclick="return confirm('Hapus ?' );" href="<?= base_url('penduduk/delete/') . $p['id']; ?>" class="btn btn-flat btn-xs  btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            <a href="<?= base_url('penduduk/detail/') . $p['id'] ?>" class="btn btn-flat btn-xs btn-primary"> <i class="glyphicon glyphicon-eye-open"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>