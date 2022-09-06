<?php  
  $id_user = $_SESSION['id_user'];
  if (!isset($id_user)) {header("Location:index.php");}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Penulis</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=penulis">Penulis</a></li>
              <li class="breadcrumb-item active">Tambah Penulis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Penulis</h3>
        <div class="card-tools">
          <a href="index.php?include=penulis" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <?php if(!empty($_GET['notif'])){?> 
          <?php if($_GET['notif']=="tambahkosong"){?> 
          <div class="alert alert-danger" role="alert"> 
          Maaf data penulis wajib di isi</div> 
          <?php }else if($_GET['notif']=="tambahkosong"){?> 
          <div class="alert alert-danger" role="alert"> 
          Maaf data alamat wajib di isi</div>
          <?php }?> 
          <?php }?>
          <?php ?>
      <!-- form start -->
      </div>
      <form class="form-horizontal"method="post" 
      action="index.php?include=konfirmasi-tambah-penulis">
        <div class="card-body">
          <div class="form-group row">
            <label for="tag" class="col-sm-3 col-form-label">Penulis</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" id="penulis"  name="penulis" value=""> 
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
  
