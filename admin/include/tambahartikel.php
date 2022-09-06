<?php  
  $id_user = $_SESSION['id_user'];
  if (!isset($id_user)) {header("Location:index.php");}
?> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=artikel">Data Artikel</a></li>
              <li class="breadcrumb-item active">Tambah Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Artikel</h3>
        <div class="card-tools">
          <a href="index.php?include=artikel" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="col-sm-10"> 
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>  
      <?php if($_GET['notif']=="tambahkosong"){?> 
      <div class="alert alert-danger" role="alert">Maaf data   
      <?php echo $_GET['jenis'];?> wajib di isi</div> 
      <?php }?> 
      <?php }?> 
      </div>

      <!-- form start -->
      
      
                <form class="form-horizontal" method ="post" action="index.php?include=konfirmasi-tambah-artikel" enctype="multipart/form-data"> 
                <div class="card-body">  
                <div class="form-group row"> 
                <label for="cover" class="col-sm-3 col-form-label">Gambar Berita </label>
                <div class="col-sm-7"> 
                <div class="custom-file"> 
                <input type="file" class="form-control" name="cover"  id="customFile"> 
                </div>  
                </div> 
                </div> 
                
                <div class="form-group row"> 
                <label for="kategori" class="col-sm-3 col-form-label">  Kategori Berita</label> 
                <div class="col-sm-7"> 
                <select class="form-control" id="kategori" name="kategori_berita">  <option value="">- Pilih Kategori -</option> 
                <?php  
                $sql_k = "SELECT `id_kategori_berita`,`kategori_berita` FROM   `kategori_berita` ORDER BY `kategori_berita`"; 
                $query_k = mysqli_query($koneksi, $sql_k); 
                while($data_k = mysqli_fetch_row($query_k)){ 
                $id_kat = $data_k[0]; 
                $kat = $data_k[1]; 
                ?> 
                <option value="<?php echo $id_kat;?>"><?php echo $kat;?></option>  <?php }?> 
                </select> 
                </div> 
                </div> 
                <div class="form-group row"> 
                <label for="judul" class="col-sm-3 col-form-label">Judul</label>  <div class="col-sm-7"> 
                <input type="text" class="form-control" name="judul" id="judul"  value=""> 
                </div> 
                </div> 
               
                <div class="form-group row"> 
                <label for="penulis" class="col-sm-3 col-form-label">Penulis</label>  <div class="col-sm-7"> 
                <select class="form-control" id="penulis" name="penulis">  <option value="">- Pilih penulis -</option> 
                <?php  
                $sql_t = "SELECT `id_penulis`,`penulis` FROM `penulis`  ORDER BY `penulis`"; 
                $query_t = mysqli_query($koneksi, $sql_t); 
                while($data_t = mysqli_fetch_row($query_t)){ 
                $id_tulis = $data_t[0]; 
                $tulis = $data_t[1]; 
                ?>
                <option value="<?php echo $id_tulis;?>"><?php echo $tulis;?></option>  <?php }?> 
                </select> 
                </div> 
                </div> 
                
                <div class="form-group row"> 
                <label for="isi" class="col-sm-3 col-form-label">Isi Berita</label>  <div class="col-sm-7"> 
                <textarea class="form-control" name="isi" id="editor1"  rows="12"></textarea> 
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
                <input type="checkbox" name="tag[]" value="<?php echo $id_tg;?>">   <?php echo $tg;?> </br> 
                <?php }?> 
                </div> 
                </div>
                </div> 
                </div> 
                </div> 
                <!-- /.card-body --> 
                <div class="card-footer"> 
                <div class="col-sm-12"> 
                <button type="submit" class="btn btn-success float-right">  <i class="fas fa-plus"></i> Tambah</button> 
                </div>  
                </div> 
                <!-- /.card-footer --> 
                </form>
    </div>
    <!-- /.card -->

    </section>
  