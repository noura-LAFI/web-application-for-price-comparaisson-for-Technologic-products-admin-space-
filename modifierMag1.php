<?php 
$id=$_GET["id"];
$nomMag=$_GET["nomMag1"];
$dess=$_GET["des1"];
$logo=$_GET["logo1"];
$tel=$_GET["tel"];
$site=$_GET["site"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "update  magasin set nom_Mag='$nomMag' , description='$dess' , image='$logo' ,
tel=$tel , siteWeb='$site'   where id_Mag=$id";
$result = mysqli_query($con,$requette);
header ("location:gestionMag.php");
?>