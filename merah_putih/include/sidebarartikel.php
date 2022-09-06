            <div class="col-lg-3 pl-0">
                    <h3 class="text-center text-white">Authors</h3>
                    <hr class="bg-white" />
                    <?php
                    $sql_d = "SELECT `penulis` from `penulis` where
                        `penulis` = '$penulis'";
                    $query_d = mysqli_query($koneksi, $sql_d);
                    while ($data_d = mysqli_fetch_row($query_d)) {
                        $penulis = $data_d[0];
                    ?>
                        <div class="owl-carousel owl-carousel4 owl-theme">
                            <div>
                                <div class="card pb-5"> <img class="card-img link-img rounded" src="assets/images/profil.jpg" alt="">
                                </div>
                                <h3 class="text-center mt-3 mb-0"><?php echo $penulis ?> </h3>
                                <p class="text-center mt-1 third-clr">Penulis</p>
                            </div>
                        </div>
                    <?php } ?>
                    <h3 class="text-center">Follow Us</h3>
                    <hr class="mx-auto" />
                    <nav class="nav nav-fill mx-auto mb-5">
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </nav>

            </div>