<section class="features4 counters cid-r7p52rqYmR" id="features4-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mbr-section-title pb-3 mbr-bold mbr-fonts-style align-left display-1">Cari Penduduk</h2>
                <div class="media-container-row">
                    <div class="card p-3 col-12 col-md-6 border-r col-lg">
                        <div class="card-box">
                            <form action="<?= base_url('home/cari') ?>" method="post" class="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cari" autocomplete="off" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Cari</button>
                            </form>
                            <br>
                            <table class="table table-hover mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($penduduk == " ") : ?>
                                        <tr>
                                            <th colspan="3">Data Kosong</th>
                                        </tr>
                                    <?php else : ?>
                                        <?php
                                        $no = 1;
                                        foreach ($penduduk as $p) : ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $p['nama']; ?></td>
                                                <td><?= $p['alamat']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>