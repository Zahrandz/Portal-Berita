<?php  
  if (!isset($_SESSION['id_user'])) {header("Location:index.php");} 
  if (!isset($_GET['data'])||$_GET['data']=="") {header("Location:index.php?include=artikel");}
  if(isset($_GET['data'])){ 
   $id_artikel = $_GET['data']; 
   $_SESSION['id_artikel']=$id_artikel; 
   
    //get data buku
    $sql_b = "SELECT `id_kategori_berita`,`judul`,`id_penulis`,`isi` FROM `artikel` WHERE `id_artikel`=$id_artikel"; 
    $query_b = mysqli_query($koneksi,$sql_b); 
    while($data_b = mysqli_fetch_row($query_b)){ 
       $id_kategori_berita = $data_b[0]; 
       $judul = $data_b[1]; 
       $id_penulis = $data_b[2]; 
       $isi = $data_b[3]; 
    } 
    $sql_h = "SELECT `id_tag` from `tag_artikel`  
    where `id_artikel`='$id_artikel'"; 
   $query_h = mysqli_query($koneksi,$sql_h); 
   $array_tag = array(); 
   while($data_h = mysqli_fetch_row($query_h)){ 
   $id_tag= $data_h[0]; 
   $array_tag[] = $id_tag; 
   } 
   } 
?> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=artikel">Data artikel</a></li>
              <li class="breadcrumb-item active">Edit Data artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Artikel</h3>
        <div class="card-tools">
          <a href="index.php?include=artikel" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      
      <div class="col-sm-10"> 
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>  <?php if($_GET['notif']=="editkosong"){?> 
      <div class="alert alert-danger" role="alert">Maaf data   <?php echo $_GET['jenis'];?> wajib di isi</div>  <?php }?>

      <?php }?> 
      </div>


      <!-- form start -->
      <form class="form-horizontal" method ="post" action="index.php?include=konfirmasi-edit-artikel" enctype="multipart/form-data"> 
      <div class="card-body">  
      <div class="form-group row"> 
      <label for="cover" class="col-sm-3 col-form-label">Gambar Berita   </label> 
      <div class="col-sm-7"> 
      <div class="custom-file"> 
      <input type="file" class="form-control" name="cover"  id="customFile"> 
      </div>  
      </div> 
      </div>
      <div class="form-group row"> 
      <label for="kategori" class="col-sm-3 col-form-label">Kategori   Berita</label> 
      <div class="col-sm-7"> 
      <select class="form-control" id="kategori" name="kategori_berita">  <option value="">- Pilih Kategori -</option> 
      <?php  
      $sql_k = "SELECT `id_kategori_berita`,`kategori_berita` FROM   `kategori_berita` ORDER BY `kategori_berita`"; 
      $query_k = mysqli_query($koneksi, $sql_k); 
      while($data_k = mysqli_fetch_row($query_k)){ 
      $id_kat = $data_k[0]; 
      $kat = $data_k[1]; 
      ?> 
      <option value="<?php echo $id_kat;?>"  
      <?php if($id_kat==$id_kategori_berita){?> 
      selected <?php }?>><?php echo $kat;?></option> 
      <?php }?> 
      </select> 
      </div> 
      </div> 
      <div class="form-group row"> 
      <label for="judul" class="col-sm-3 col-form-label">Judul</label>  <div class="col-sm-7"> 
      <input type="text" class="form-control" name="judul" id="judul"   value="<?php echo $judul;?>"> 
      </div> 
      </div> 
      <div class="form-group row"> 
      <label for="penulis" class="col-sm-3 col-form-  label">Penulis</label> 
      <div class="col-sm-7"> 
      <select class="form-control" id="penulis" name="penulis">  <option value="">- Pilih Penulis -</option> 
      <?php  
      $sql_t = "SELECT `id_penulis`,`penulis` FROM `penulis`  ORDER BY `penulis`"; 
      $query_t = mysqli_query($koneksi, $sql_t); 
      while($data_t = mysqli_fetch_row($query_t)){ 
      $id_tulis = $data_t[0]; 
      $tulis= $data_t[1]; 
      ?> 
      <option value="<?php echo $id_tulis;?>" 
      <?php if($id_tulis==$id_penulis){?> 
      selected <?php }?>><?php echo $tulis;?></option>  <?php }?> 
      </select> 
      </div>
      </div>
      <div class="form-group row"> 
      <label for="sinopsis" class="col-sm-3 col-form-label">Isi Berita</label>  <div class="col-sm-7"> 
      <textarea class="form-control" name="sinopsis" id="editor1"  rows="12"><?php echo $sinopsis;?></textarea> 
      </div> 
      </div>  
      <div class="form-group row"> 
      <label for="tag" class="col-sm-3 col-form-label">Tag Artikel</label>  <div class="col-sm-7"> 
      <?php  
      $sql_g = "SELECT `id_tag`,`tag` FROM `tag` 
      ORDER BY `tag`"; 
      $query_g = mysqli_query($koneksi, $sql_g); 
      while($data_g = mysqli_fetch_row($query_g)){ 
      $id_tg = $data_g[0]; 
      $tg = $data_g[1]; 
      ?> 
      <input type="checkbox" name="tag[]" value="<?php echo $id_tg;?>"  <?php if(in_array($id_tg, $array_tag)){?>checked="checked" <?php }?>>   <?php echo $tg;?> </br> 
      <?php }?> 
      </div> 
      </div>
      
      </div> 
      </div> 
      </div> 
      <!-- /.card-body --> 
      <div class="card-footer"> 
      <div class="col-sm-12"> 
      <button type="submit" class="btn btn-success float-right"><i class="fas   fa-save"></i> Simpan</button> 
      </div>  
      </div> 
      <!-- /.card-footer --> 
      </form>
    </div>
    <!-- /.card -->
    </section>