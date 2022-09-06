<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-light-primary elevation-4">
    <img src="foto/mitsuha2.png" style="width: 100%;position: absolute;opacity: .1;bottom: 0px;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">Admin Portal Berita</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>Data Master <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=kategori-berita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=tag" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=penulis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penulis</p>
                </a>
              </li>
            </ul>
          <li class="nav-item">
            <a href="index.php?include=artikel" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Artikel</p>
            </a>
          </li>
          <?php 
            if (isset($_SESSION['level'])){ 
              if ($_SESSION['level']=="Superadmin"){?> 
              <li class="nav-item"> 
                <a href="index.php?include=user" class="nav-link"><i class="nav-icon fas fa-users-cog"></i><p>Pengaturan User </p></a> 
              </li> 
          <?php }}?>
          <li class="nav-item">
            <a href="index.php?include=ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>Ubah Password</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sign Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>