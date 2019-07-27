<section class="features4 counters cid-r7p52rqYmR" id="features4-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mbr-section-title pb-3 mbr-bold mbr-fonts-style align-left display-1">Sampaikan Pesan Anda</h2>
                <?= $this->session->flashdata('message'); ?>
                <div class="media-container-row">
                    <div class="card p-3 col-12 col-md-6 border-r col-lg">
                        <div class="card-box">
                            <form action="<?= base_url('home/pesan') ?>" method="post" class="form">
                                <div class="form-group">
                                    <label>Email/No Hp</label>
                                    <input type="text" class="form-control" name="kontak" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>