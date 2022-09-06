<?php 
    $id_artikel         = $_SESSION['id_artikel']; 
    $id_kategori_berita = $_POST['kategori_berita']; 
    $judul              = $_POST['judul'];
    $id_penulis         = $_POST['penulis']; 
    $isi                = addslashes($_POST['isi']); 
    $tag                = $_POST['tag'];
    $update_by          = $_SESSION['id_user']; 
    $update_at          = date("Y-m-d");
    $lokasi_file        = $_FILES['cover']['tmp_name']; 
    $nama_file          = $_FILES['cover']['name']; 
    $direktori          = 'cover/'.$nama_file; 
    //get cover  
    $sql_f = "SELECT `cover` FROM `artikel` WHERE `id_artikel`='$id_artikel'";  $query_f = mysqli_query($koneksi,$sql_f); 
    while($data_f = mysqli_fetch_row($query_f)){ 
    $cover = $data_f[0]; 
    //echo $foto; 
    } 
    
    if(empty($id_kategori_berita)){ 
    header("Location:index.php?include=edit-artikel&data=$id_artikel&notif=editkosong&jenis=kategoriberita"); 
    }else if(empty($judul)){ 
    header("Location:index.php?include=edit-artikel&data=$id_artikel&notif=editkosong&jenis=judul"); 
    }else if(empty($id_penulis)){ 
    header("Location:index.php?include=edit-artikel&data=$id_artikel&notif=editkosong&jenis=penulis");  
    }else if(empty($tag)){ 
    header("Location:index.php?include=edit-artikel&data=$id_artikel&notif=editkosong&jenis=tag"); 
    }else{ 
    $lokasi_file = $_FILES['cover']['tmp_name']; 
    $nama_file = $_FILES['cover']['name']; 
    $direktori = 'cover/'.$nama_file; 
    if(move_uploaded_file($lokasi_file,$direktori)){ 
    if(!empty($cover)){



    unlink("cover/$cover"); 
    } 
    $sql = "UPDATE `artikel` set  
    `id_kategori_berita`='$id_kategori_berita',`judul`='$judul', `id_penulis`='$id_penulis',`isi`='$isi',`cover`='$nama_file',`update_by`='$update_by',`update_at`='$update_at' WHERE `id_artikel`='$id_artikel'"; 
    mysqli_query($koneksi,$sql); 
    }else{ 
    $sql = "UPDATE `artikel` set  
    `id_kategori_berita`='$id_kategori_berita',`judul`='$judul', `id_penulis`='$id_penulis', `isi`='$isi',`update_by`='$update_by',`update_at`='$update_at' WHERE `id_artikel`='$id_artikel'"; 
    mysqli_query($koneksi,$sql); 
    } 
    //hapus tag 
    $sql_d = "DELETE FROM `tag_artikel` where `id_artikel`='$id_artikel'"; mysqli_query($koneksi,$sql_d); 
    //tambah tag 
    if(!empty($_POST['tag'])){ 
    foreach($_POST['tag'] as $id_tag){ 
    $sql_i = "INSERT INTO `tag_artikel` (`id_artikel`,`id_tag`)  
    values ('$id_artikel','$id_tag')"; 
    mysqli_query($koneksi,$sql_i); 
    } 
    } 
    unset($_SESSION['id_artikel']); 
    header("Location:index.php?include=artikel&notif=editberhasil"); 
    } 
 
    ?>

