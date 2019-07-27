<div class="box">
    <div class="box-header">
        <div class="box-title">Cari Penduduk</div>
    </div>
    <div class="box-body">
        <form action="<?= base_url('cari/data'); ?>" method="post" class="form">
            <div class="form-group">
                <input type="text" class="form-control" name="q" id="cari" autocomplete="off">
            </div>
            <button class="btn btn-primary" type="submit"> <i class="fa fa-search"></i> Cari</button>
        </form>
    </div>
    <div id="result"></div>
</div>