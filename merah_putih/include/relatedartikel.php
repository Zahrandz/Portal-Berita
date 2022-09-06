                    <h2 class="text-center fs-35 mt-5 pt-5 mb-0 pb-2">More Articles</h2>
                    <hr class="mt-0 pt-0" />
                    <div class="row">
                        <?php
                        $sql_bt = "SELECT `id_artikel`,`judul`,
                        DATE_FORMAT(`insert_at`, '%d-%m-%Y'),
                        `kategori_berita`,`cover`,`isi`,`penulis` FROM `artikel`INNER JOIN
                        `kategori_berita`
                        ON `artikel`.`id_kategori_berita` = `kategori_berita`.`id_kategori_berita`
                        INNER JOIN  `penulis` ON `penulis`.`id_penulis` = `artikel`.`id_penulis` ORDER BY  `id_artikel` DESC LIMIT 2 ";
                        $query_bt = mysqli_query($koneksi, $sql_bt);
                        while ($data_bt = mysqli_fetch_row($query_bt)) {
                            $id_artikel = $data_bt[0];
                            $insert_at = $data_bt[2];
                            $judul = $data_bt[1];
                            $kategori_berita = $data_bt[3];
                            $cover = $data_bt[4];
                            $penulis = $data_bt[6];

                        ?>
                            <div class="col-md-6">
                                <img src="admin/cover/" class="w-100" alt="">
                                <p class="img-tag text-center"><?php echo $kategori_berita ?></p>
                                <hr class="mt-0" />
                                <div class="card"> <img class="card-img link-img" src="admin/cover/<?php echo $cover ?>" alt="">
                                    <h3 class="text-center"><?php echo $judul ?></h3>

                                    <ul class="nav nav-fill mx-auto pb-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php echo $penulis ?></a>
                                        </li>
                                        <li><span>.</span></li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><?php echo $insert_at ?></a>
                                        </li>
                                        <li><span>.</span></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>