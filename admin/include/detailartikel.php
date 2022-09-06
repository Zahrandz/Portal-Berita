<?php 
  if (!isset($_SESSION['id_user'])) {header("Location:index.php");} 
  if (!isset($_GET['data'])||$_GET['data']=="") {header("Location:index.php?include=artikel");}
  if(isset($_GET['data'])){ 
$id_artikel = $_GET['data']; 
//gat data artikel
 $sql = "SELECT `a`.`cover`,`k`.`kategori_berita`,`a`.`judul`,`p`.`penulis`, `a`.`isi` 
 FROM `artikel` `a` INNER JOIN `kategori_berita` `k` ON `a`.`id_kategori_berita`=`k`.`id_kategori_berita` 
 INNER JOIN `penulis` `p` ON `a`.`id_penulis`= `p`.`id_penulis`  WHERE `a`.`id_artikel`='$id_artikel'"; 
 $query = mysqli_query($koneksi,$sql); 
 while($data = mysqli_fetch_row($query)){ 
 $cover = $data[0]; 
 $kategori_berita = $data[1]; 
 $judul = $data[2];  
 $penulis = $data[3]; 
 $isi = $data[4]; 
 }
} 
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=artikel">Data Artikel</a></li>
              <li class="breadcrumb-item active">Detail Data Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=artikel" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
            <table class="table table-bordered"> 
            <tbody>  
            <tr> 
            <td><strong>Cover Artikel<strong></td> 
            <td><img src="cover/<?php echo $cover;?>"  
            class="img-fluid" width="200px;"></td> 
            </tr>  
            <tr> 
            <td width="20%"><strong>Kategori Berita<strong></td>  <td width="80%"><?php echo $kategori_berita;?></td> 
            </tr>  
            <tr> 
            <td width="20%"><strong>Judul<strong></td> 
            <td width="80%"><?php echo $judul;?></td> 
            </tr>  
            
            <tr> 
            <td width="20%"><strong>Penulis<strong></td> 
            <td width="80%"><?php echo $penulis;?></td> 
            </tr> 
            
            <tr> 
            <td><strong>Tag<strong></td> 
            <td> 
            <ul> 
            <?php 
            //get tag 
            $sql_h = "SELECT `t`.`tag` from `tag_artikel` `ta` 
            inner join `tag` `t` ON `ta`.`id_tag` = `t`.`id_tag`   where `ta`.`id_artikel`='$id_artikel'"; 
            $query_h = mysqli_query($koneksi,$sql_h); 
            while($data_h = mysqli_fetch_row($query_h)){ 
            $tag= $data_h[0]; 
            ?> 
            <li><?php echo $tag;?></li> 
            <?php }?> 
            </ul> 
            </td> 
            </tr> 
            <tr> 
            <td width="20%"><strong>Isi Berita<strong></td>
            <td width="80%"><?php echo $isi;?></td> 
            </tr> 
            </tbody> 
            </table>


              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>

