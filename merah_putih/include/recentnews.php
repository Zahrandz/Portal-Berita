                    <h2 class="text-center fs-35 mt-5 pt-5 mb-0 pb-2">Populer News</h2>
                    <hr class="mt-0 pt-0" />
                    <div class="row">


                        <?php
                        $sql_l = "SELECT `id_artikel`,`judul`,
                    DATE_FORMAT(`insert_at`, '%d-%m-%Y'),
                    `kategori_berita`,`cover`,`isi`,`penulis` FROM `artikel`INNER JOIN
                    `kategori_berita`
                    ON `artikel`.`id_kategori_berita` = `kategori_berita`.`id_kategori_berita`
                    INNER JOIN  `penulis` ON `penulis`.`id_penulis` = `artikel`.`id_penulis` ORDER BY `id_artikel` LIMIT 0,4";
                        $query_l = mysqli_query($koneksi, $sql_l);
                        while ($data_l = mysqli_fetch_row($query_l)) {
                            $id_artikel = $data_l[0];
                            $insert_at = $data_l[2];
                            $judul = $data_l[1];
                            $cover = $data_l[4];
                            $penulis = $data_l[6];
                        ?>

                            <div class="col-md-3">
                                <hr class="mt-0" />
                                <div class="card"> <img class="card-img link-img" src="admin/cover/<?php echo $cover ?>" alt="">
                                    <h3><a href="index.php?inlcude=article" title=""><?php echo $judul ?></a></h3>

                                    <ul class="nav nav-fill mx-auto pb-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php echo $insert_at ?></a>
                                        </li>
                                        <li><span>.</span></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>