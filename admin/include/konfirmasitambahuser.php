<?php  
$nama = $_POST['nama']; 
$email = $_POST['email'];
$username = $_POST['username'];
$password = MD5($_POST['password']);
$level = $_POST['level'];
$lokasi_file = $_FILES['foto']['tmp_name'];
if(empty($nama)){ 
    header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=nama"); 
}else if(empty($email)){ 
    header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=email");
}else if(empty($username)){ 
    header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=username");
}else if(empty($password)){ 
    header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=password");
}else if(empty($lokasi_file)){ 
    header("Location:index.php?include=tambah-user&notif=tambahkosong&jenis=foto");   
}else{ 
    $lokasi_file = $_FILES['foto']['tmp_name']; 
            $nama_file = $_FILES['foto']['name']; 
            $direktori = 'foto/'.$nama_file; 
            if(move_uploaded_file($lokasi_file,$direktori)){ 
           $sql = "INSERT INTO `user` (`nama`,`email`,`username`,`password`,`level`,`foto`)  
            VALUES('$nama','$email','$username','$password','$level','$nama_file')";
    mysqli_query($koneksi,$sql); 
header("Location:index.php?include=user&notif=tambahberhasil"); 
} 
}
?>
    
