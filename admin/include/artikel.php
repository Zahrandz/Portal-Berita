<?php 
  $id_user = $_SESSION['id_user'];
  if (!isset($id_user)) {header("Location:index.php");}
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){ 
    if($_GET['aksi']=='hapus'){ 
      $id_artikel = $_GET['data']; 
      //get cover 
      $sql_f = "SELECT `cover` FROM `artikel` WHERE `id_artikel`='$id_artikel'"; 
      $query_f = mysqli_query($koneksi,$sql_f); 
      $jumlah_f = mysqli_num_rows($query_f); 
      if($jumlah_f>0){ 
        while($data_f = mysqli_fetch_row($query_f)){ 
          $cover = $data_f[0]; 
          //menghapus cover 
          unlink("cover/$cover"); 
        } 
      } 
      //hapus tag artikel 
      $sql_dh = "delete from `tag_artikel` where `id_artikel` = '$id_artikel'"; 
      mysqli_query($koneksi,$sql_dh); 
      //hapus data buku 
      $sql_dm = "delete from `artikel` where `id_artikel` = '$id_artikel'"; 
      mysqli_query($koneksi,$sql_dm); 
    } 
  } 
  if(isset($_POST["katakunci"])){ 
    $katakunci = $_POST["katakunci"]; 
    $_SESSION['katakunci_artikel'] = $katakunci; 
  } 
  if(isset($_SESSION['katakunci_artikel'])){ 
    $katakunci = $_SESSION['katakunci_artikel']; 
  } else {$katakunci = "";}
?> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-newspaper"></i> Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Artikel</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-artikel" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Artikel</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-light"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12"> 
                  <?php if(!empty($_GET['notif'])){?> 
                    <?php if($_GET['notif']=="tambahberhasil"){?> 
                      <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div> 
                    <?php } else if($_GET['notif']=="editberhasil"){?> 
                      <div class="alert alert-success" role="alert"> Data Berhasil Diubah</div> 
                    <?php } else if($_GET['notif']=="hapusberhasil"){?> 
                      <div class="alert alert-success" role="alert">  Data Berhasil Dihapus</div> 
                    <?php }?>
                  <?php }?> 
                </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="bg-info">
                      <th width="5%">No</th>
                      <th width="35%">Judul</th>
                      <th width="25%">Kategori Berita</th>
                      <th width="20%">penulis</th>  
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  
                    $batas = 2; 
                    if(!isset($_GET['halaman'])){ 
                      $posisi = 0; 
                      $halaman = 1; 
                    }else{ 
                      $halaman = $_GET['halaman']; 
                      $posisi = ($halaman-1) * $batas; 
                    }  
                    //query sql
                    $sql_b = "SELECT artikel.id_artikel, kategori_berita.kategori_berita, artikel.judul, penulis.penulis FROM `artikel` 
                    INNER JOIN `kategori_berita` ON kategori_berita.id_kategori_berita=artikel.id_kategori_berita 
                    INNER JOIN `penulis` ON penulis.id_penulis=artikel.id_penulis";
                    $sql_b .= " where `judul` LIKE '%$katakunci%'";
                    $sql_b .= " ORDER BY `judul` limit $posisi, $batas ";
                    $query_b = mysqli_query($koneksi,$sql_b); 
                    $posisi += 1; 
                    while($data_b = mysqli_fetch_row($query_b)){ 
                       $id_artikel = $data_b[0]; 
                       $kategori_berita = $data_b[1];
                       $judul = $data_b[2];
                       $penulis = $data_b[3];
                       
                    ?>
                    <tr> 
                      <td><?php echo $posisi;?></td> 
                      <td><?php echo $judul;?></td>
                      <td><?php echo $kategori_berita;?></td>
                      <td><?php echo $penulis;?></td> 
                      <td align="center"> 
                      <a href="index.php?include=edit-artikel&data=<?php echo $id_artikel;?>" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a> 
                      <a href="index.php?include=detail-artikel&data=<?php echo $id_artikel;?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul; ?>?')) window.location.href = 'index.php?include=artikel&aksi=hapus&data=<?php echo $id_artikel;?>&notif=hapusberhasil'" class="btn btn-xs btn-danger"  title="Hapus"><i class="fas fa-trash"></i></a> 
                      </td> 
                    </tr> 
                    <?php $posisi++;}?> 
                  </tbody>
                </table>  
              </div>
              <!-- /.card-body -->
              <?php 
                //hitung jumlah semua data  
                $sql_jum = "SELECT artikel.id_artikel, kategori_berita.kategori_berita, artikel.judul, penulis.penulis FROM `artikel` 
                INNER JOIN `kategori_berita` ON kategori_berita.id_kategori_berita=artikel.id_kategori_berita 
                INNER JOIN `penulis` ON penulis.id_penulis=artikel.id_penulis";
                $sql_jum .= " order by `judul`"; 
                $query_jum = mysqli_query($koneksi,$sql_jum); 
                $jum_data = mysqli_num_rows($query_jum); 
                $jum_halaman = ceil($jum_data/$batas); 

                $link = "index.php?include=artikel";
                include("includes/pagination.php")
              ?>
            </div>
            <!-- /.card -->

    </section>