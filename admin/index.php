<?php 
session_start();
date_default_timezone_set("Asia/Jakarta");

include("../koneksi/koneksi.php");
if(isset($_GET["include"])){ 
    $include = $_GET["include"]; 
    $halaman_konfirmasi = array(
      "konfirmasi-edit-artikel","konfirmasi-edit-kategori-berita","konfirmasi-edit-penulis","konfirmasi-edit-profil","konfirmasi-edit-tag",
      "konfirmasi-edit-user","konfirmasi-login","konfirmasi-tambah-artikel","konfirmasi-tambah-kategori-berita","konfirmasi-tambah-penulis",
      "konfirmasi-tambah-tag","konfirmasi-tambah-user","konfirmasi-ubah-password","signout"
    );
    if  (in_array($include, $halaman_konfirmasi)) {
      $konfir = str_replace("-", "", $include);
      include("include/$konfir.php");
    }
   
  }

?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>

<?php 
//cek ada get include 
if(isset($_GET["include"])){ 
 $include = $_GET["include"]; 
 //cek apakah ada session id admin 
 if(isset($_SESSION['id_user'])){ 
 ?> 
 <body class="hold-transition sidebar-mini layout-fixed"> 
 <div class="wrapper"> 
 <?php include("includes/header.php") ?> 
 <?php include("includes/sidebar.php") ?> 
 <div class="content-wrapper"> 
 <?php  
              //pemanggilan ke halaman-halaman menu admin 
              $halaman_admin = array(
                "artikel","detail-artikel","detail-user","edit-artikel","edit-kategori-berita","edit-penulis","edit-profil","edit-tag",
                "edit-user","kategori-berita","login","penulis","profil","tag","tambah-artikel","tambah-kategori-berita","tambah-penulis",
                "tambah-tag","tambah-user","ubah-password","user"
              );
              if  (in_array($include, $halaman_admin)) {
                $page = str_replace("-", "", $include);
                include("include/$page.php");
              }
              else{ 
                //pemanggilan halaman form login 
                include("include/profil.php"); 
              }   
            ?> 
          </div> 
 <!-- /.content-wrapper --> 
 <?php include("includes/footer.php") ?> 
 </div> 
 <!-- ./wrapper --> 
 <?php include("includes/script.php") ?> 
 </body> 
 <?php 
 }else{ 
 //pemanggilan halaman form login 
 include("include/login.php"); 
 }  
}else{ 
 if(isset($_SESSION['id_user'])){ 
 //pemanggilan ke halaman-halaman profil jika ada session  ?> 
 <body class="hold-transition sidebar-mini layout-fixed">  
 <div class="wrapper"> 
 <?php include("includes/header.php") ?> 
 <?php include("includes/sidebar.php") ?> 
 <div class="content-wrapper"> 
 <?php 
 //pemanggilan profil 
 include("include/profil.php"); 
 ?> 
 </div> 
 <!-- /.content-wrapper --> 
 <?php include("includes/footer.php") ?> 
 </div>



 <!-- ./wrapper --> 
 <?php include("includes/script.php") ?> 
 </body> 
 <?php 
 }else{ 
 //pemanggilan halaman form login 
 include("include/login.php"); 
 } 
} 
?>
</html>
