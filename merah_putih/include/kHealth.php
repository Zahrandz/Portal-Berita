<body>

    <div class="row vr-gallery">
        <?php
        $sql_dh = "SELECT `id_artikel`,`judul`, DATE_FORMAT(`insert_at`, '%d-%m-%Y'), `cover`,`isi` FROM `artikel` WHERE `id_kategori_berita` = 24 LIMIT 0,4";
        $query_dh = mysqli_query($koneksi, $sql_dh);
        while ($data_dh = mysqli_fetch_row($query_dh)) {
            $id_artikel = $data_dh[0];
            $judul = $data_dh[1];
            $insert_at = $data_dh[2];
            $cover = $data_dh[3];
            $isi = $data_dh[4];
        ?>

            <div class="blog-box row">
                <div class="col mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md"><a href="index.php?include=article" title="">
                                <img src="admin/cover/<?php echo $cover ?>" alt="">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small><?php echo $insert_at ?></small></p>
                            <h3><a href="index.php?include=article" title=""><?php echo $judul ?></a>
                            </h3>
                            <p>
                                <?php echo substr($isi, 0, 300) ?>
                                <span>...</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>
        <div class="col-md-12 text-center">
            <a href="#" class="btn">LOAD MORE</a>

        </div>
    </div>



    <?php
    include("include/recentnews.php");
    ?>



</body>

