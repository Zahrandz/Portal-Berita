<?php  

        $id_kategori_berita = $_POST['kategori_berita']; 
        $judul = $_POST['judul'];  
        $id_penulis = $_POST['penulis']; 
        $isi = $_POST['isi']; 
        $tag = $_POST['tag'];
        $insert_by = $_SESSION['id_user'];
        $insert_at = date("Y-m-d"); 
        $lokasi_file = $_FILES['cover']['tmp_name']; 
        $nama_file = $_FILES['cover']['name']; 
        $direktori = 'cover/'.$nama_file; 
            if(empty($id_kategori_berita)){  
            header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=kategoriberita"); 
            }else if(empty($judul)){ 
            header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=judul"); 
             
            }else if(empty($id_penulis)){ 
            header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=penulis"); 
             
            }else if(empty($tag)){ 
            header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=tag"); 
        }else if(empty($nama_file)){ 
            header("Location:index.php?include=tambah-artikel&notif=tambahkosong&jenis=foto"); 
            }else{  
                $lokasi_file = $_FILES['cover']['tmp_name']; 
                $nama_file = $_FILES['cover']['name']; 
                $direktori = 'cover/'.$nama_file; 
                if(move_uploaded_file($lokasi_file,$direktori)){
        $sql = "INSERT INTO `artikel`  
        (`id_kategori_berita`,`judul`,`id_penulis`,`isi`,`cover`,`insert_by`,`insert_at`) 
        VALUES ('$id_kategori_berita','$judul','$id_penulis','$isi','$nama_file','$insert_by','$insert_at')"; 
        //echo $sql; 
        mysqli_query($koneksi,$sql); 
        $id_artikel = mysqli_insert_id($koneksi); 
        if(!empty($_POST['tag'])){ 
        foreach($_POST['tag'] as $id_tag){ 
        $sql_i = "INSERT INTO `tag_artikel` (`id_artikel`, `id_tag`)  
        values ('$id_artikel', '$id_tag')"; 
        mysqli_query($koneksi,$sql_i); 
        } 
        } 
        header("Location:index.php?include=artikel&notif=tambahberhasil");	 
        } 
    }
        ?>






