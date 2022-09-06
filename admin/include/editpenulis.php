<?php  
if (!isset($_SESSION['id_user'])) {header("Location:index.php");}
if (!isset($_GET['data'])||$_GET['data']=="") {header("Location:index.php?include=penulis");} 
if(isset($_GET['data'])){
    $id_penulis = $_GET['data']; 
    $_SESSION['id_penulis']=$id_penulis; 

    //get data kategori blog 
    $sql_d = "SELECT `penulis` from `penulis` where 
    `id_penulis` = '$id_penulis'"; 
    $query_d = mysqli_query($koneksi, $sql_d); 
    while($data_d = mysqli_fetch_row($query_d)){ 
        $penulis= $data_d[0];
 } 
} 
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Penulis</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=penulis">Penulis</a></li>
              <li class="breadcrumb-item active">Edit Penulis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Penulis</h3>
        <div class="card-tools">
          <a href="index.php?include=penulis" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <?php if(!empty($_GET['notif'])){?> 
        <?php if($_GET['notif']=="editkosong"){?> 
          <div class="alert alert-danger" role="alert"> 
          Maaf data penulis wajib di isi</div> 
        <?php }?> 
        <?php }?>
      <!-- form start -->
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-penulis">
        <div class="card-body">
          <div class="form-group row">
            <label for="penulis" class="col-sm-3 col-form-label">Penulis</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $penulis;?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
    </section>
  