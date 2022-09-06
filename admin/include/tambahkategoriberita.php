<?php  
  $id_user = $_SESSION['id_user'];
  if (!isset($id_user)) {header("Location:index.php?include=login");}
?> 

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Kategori Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=kategori-berita">Kategori berita</a></li>
              <li class="breadcrumb-item active">Tambah Kategori Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Kategori Berita</h3>
        <div class="card-tools">
          <a href="index.php?include=kategori-berita" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <?php if(!empty($_GET['notif'])){?> 
          <?php if($_GET['notif']=="tambahkosong"){?> 
          <div class="alert alert-danger" role="alert"> 
          Maaf data kategori berita wajib di isi</div> 
          <?php }?> 
<?php }?>
      <!-- form start -->
      </div>
      <form class="form-horizontal" method="post" 
      action="index.php?include=konfirmasi-tambah-kategori-berita"> 
      <div class="card-body"> 
      <div class="form-group row"> 
      <label for="kategoriberita" class="col-sm-3 col-form-label">  Kategori berita</label> 
      <div class="col-sm-7"> 
      <input type="text" class="form-control" id="kategoriberita"  name="kategori_berita" value=""> 
      </div> 
      </div> 
      </div> 
      <!-- /.card-body --> 
      <div class="card-footer"> 
      <div class="col-sm-10"> 
      <button type="submit" class="btn btn-success float-right">  
      <i class="fas fa-plus"></i> Tambah</button> 
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
   </section>