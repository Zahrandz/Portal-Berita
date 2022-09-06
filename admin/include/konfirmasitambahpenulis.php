<?php  
$penulis = $_POST['penulis'];
if(empty($penulis)){ 
    header("Location:index.php?include=tambah-penulis&notif=tambahkosong"); 
}else{ 
    $sql = "INSERT INTO `penulis` (`penulis`)
    values ('$penulis')"; 
    mysqli_query($koneksi,$sql); 
header("Location:index.php?include=penulis&notif=tambahberhasil"); 
} 
?>