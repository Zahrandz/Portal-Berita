<body>
<div class="container">
<div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
      
      <?php if(!empty($_GET['gagal'])){?> 
      <?php if($_GET['gagal']=="userKosong"){?> 
      <span class="text-danger"> 
      Maaf Username Tidak Boleh Kosong 
      </span> 
      <?php } else if($_GET['gagal']=="passKosong"){?> 
      <span class="text-danger"> 
      Maaf Password Tidak Boleh Kosong 
      </span> 
      <?php } else {?> 
      <span class="text-danger"> 
      Maaf Username dan Password Anda Salah 
      </span> 
      <?php }?> 
      <?php }?>
      <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

      <form action="index.php?include=konfirmasi-login" method="post">
          <div class="form-group">
      <label class="form-control-label">USERNAME</label>
          <input type="text" class="form-control"
          name="username">
        </div>
        <div class="form-group">
        <label class="form-control-label">PASSWORD</label>
          <input type="password" class="form-control " i 
          name="password">
        </div>
        <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
          <!-- /.col -->
          <div class="col-lg-6 login-btm login-button">
            <button type="submit"  name="login" value="login" class="btn btn-outline-primary btn-block">LOGIN</button>
            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
<!-- /.login-box -->

<?php include("includes/script.php") ?>

</body>