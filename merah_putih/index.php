<?php include("koneksi/koneksi.php");
if(isset($_GET["include"])){
$include = $_GET["include"];

}
?>
<!doctype html>
<html lang="en">
    <head>
        <?php include("include/head.php");?>
    </head>
    <body>
    <?php include("include/header.php");?>
        
        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if($include=="about"){
            include("include/about.php");
            }else if($include=="article"){
            include("include/article.php");
            }else if($include=="k-Health"){
                include("include/kHealth.php");
            }else if($include=="k-Lifestyle"){
                include("include/kLifestyle.php");
            }else if($include=="k-Music"){
                include("include/kMusic.php");
            }else if($include=="k-Pop-Culture"){
                include("include/kPopCulture.php");
            }else if($include=="k-Sci-Tech"){
                include("include/kSciTech.php"); 
            }else{ 
            include("include/index.php");
            }
            }else{
            include("include/index.php");
            }
        ?>
               
        <?php include("include/footer.php");?>
        <?php include("include/script.php");?>
    </body>
</html>