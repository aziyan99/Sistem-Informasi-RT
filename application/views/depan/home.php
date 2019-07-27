<section class="header1 cid-r7oSZm4Djg" id="header1-0">
    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(104, 121, 239);"></div>
    <div class="container align-center">
        <div class="row justify-content-start">
            <div class="mbr-white col-lg-6 col-md-8">
                <h1 class="mbr-section-title mbr-bold align-left mbr-white pb-1 mbr-fonts-style display-1">SIM-RT</h1>
                <p class="mbr-text align-left pb-4 mbr-fonts-style display-7">Sistem Informasi Manajemen Penduduk</p>

            </div>
        </div>
</section>
<section class="features4 counters cid-r7p52rqYmR" id="features4-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mbr-section-title pb-3 mbr-bold mbr-fonts-style align-left display-1">Jumlah Total Penduduk</h2>
                <div class="media-container-row">
                    <div class="card p-3 col-12 col-md-6 border-r col-lg">
                        <div class="card-box">
                            <h4 class="count card-title mbr-fonts-style mbr-white mbr-normal align-center display-1"><?= $this->db->count_all('data_penduduk'); ?></h4>
                            <p class="mbr-text mbr-fonts-style mbr-white mbr-normal align-center display-4">Orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>