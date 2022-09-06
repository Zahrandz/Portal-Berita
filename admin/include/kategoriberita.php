<?php  
 $id_user = $_SESSION['id_user'];
 if (!isset($id_user)) {header("Location:index.php");}
 if((isset($_GET['aksi']))&&(isset($_GET['data']))){ 
   if($_GET['aksi']=='hapus'){ 
$id_kategori_berita = $_GET['data']; 
//hapus kategori berita 
$sql_dh = "DELETE from `kategori_berita`  
where `id_kategori_berita` = '$id_kategori_berita'"; 
mysqli_query($koneksi,$sql_dh); 
} 
}
if(isset($_POST["katakunci"])){ 
  $katakunci = $_POST["katakunci"]; 
  $_SESSION['katakunci_k_berita'] = $katakunci; 
} 
if(isset($_SESSION['katakunci_k_berita'])){ 
  $katakunci = $_SESSION['katakunci_k_berita']; 
}
else {
  $katakunci = "";
} 
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> Kategori Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Kategori Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Kategori Berita</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-kategori-berita" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah  Kategori Berita</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
              <form method="post" action=""> 
                <div class="row"> 
                <div class="col-md-4 bottom-10"> 
                <input type="text" class="form-control" id="kata_kunci"  name="katakunci"> 
              </div> 
              <div class="col-md-5 bottom-10"> 
              <button type="submit" class="btn btn-light">  
              <i class="fas fa-search"></i> Search</button>  </div>
                </div><!-- .row --> 
                </form>

                </div><br>
            <div class="col-sm-12"> 
              <?php if(!empty($_GET['notif'])){?> 
              <?php if($_GET['notif']=="tambahberhasil"){?> 
                  <div class="alert alert-success" role="alert"> 
                  Data Berhasil Ditambahkan</div> 
              <?php } else if($_GET['notif']=="editberhasil"){?> 
                  <div class="alert alert-success" role="alert"> 
                  Data Berhasil Diubah</div> 
              <?php } else if($_GET['notif']=="hapusberhasil"){?> 
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div> 
              <?php }?> 
              <?php }?> 
              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr class="bg-info">
                      <th width="5%">No</th>
                      <th width="80%">Kategori Berita</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  
                  
                  //mengatur posisi dan batas paginatioan
                    $batas = 2;
                    if(!isset($_GET['halaman'])){
                          $posisi = 0;
                          $halaman = 1;
                    }else{
                          $halaman = $_GET['halaman'];
                          $posisi = ($halaman-1) * $batas;
                    }
                    
                  $sql_k = "SELECT `id_kategori_berita`,`kategori_berita` FROM 
                  `kategori_berita`";
                    $sql_k .= "where `kategori_berita` LIKE '%$katakunci%'";
                  $sql_k .= " ORDER BY `kategori_berita` limit $posisi, $batas ";
                  $query_k = mysqli_query($koneksi,$sql_k);
                  $no = $posisi+1;
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kategori_berita = $data_k[0];
                  $kategori_berita = $data_k[1];
                  
                  ?> 
                  <tr> 
                  <td><?php echo $no;?></td> 
                  <td><?php echo $kategori_berita;?></td> 
                  <td align="center"> 
                  <a href="index.php?include=edit-kategori-berita&data=<?php echo $id_kategori_berita;?>"   
                  class="btn btn-xs btn-warning"><i class="fas fa-edit"></i> Edit</a>  
                  <a href="javascript:if(confirm('Anda yakin ingin menghapus data   
                  <?php echo $kategori_berita; 
                  ?>?'))window.location.href ='index.php?include=kategori-berita&aksi=hapus&data=
                  <?php echo$id_kategori_berita;
                  ?>&notif=hapusberhasil'"  
                  class="btn btn-xs btn-danger"><i class="fas fa-trash"></i>  
                  Hapus</a> 
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <?php
                  //hitung jumlah semua data 
                  $sql_jum = "SELECT `id_kategori_berita`, `kategori_berita` from 
                  `kategori_berita`";
          
                  $query_jum = mysqli_query($koneksi,$sql_jum);
                  $jum_data = mysqli_num_rows($query_jum);
                  $jum_halaman = ceil($jum_data/$batas);

                  $link = "index.php?include=kategori-berita";
                  include("includes/pagination.php")
                  ?>
            </div>
    </section>
    
