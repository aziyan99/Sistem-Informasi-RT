<?= $this->session->flashdata('message'); ?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Pesan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email/No Hp</th>
                    <th>Pesan</th>
                    <th>Tanggal Dikirim</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $x = 1;
                foreach ($pesan as $p) : ?>
                    <tr>
                        <td><?= $x++; ?></td>
                        <td><?= $p['email/no_hp']; ?></td>
                        <td><?= $p['pesan']; ?></td>
                        <td><?= date('D, d M Y', $p['tanggal_dikirim']); ?></td>
                        <td>
                            <a onclick="return confirm('Hapus ?' );" href="<?= base_url('pesan/delete/') . $p['id']; ?>" class="btn btn-flat btn-xs  btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->