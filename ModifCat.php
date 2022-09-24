<?php 
$id=$_GET["id"];
$nom=$_GET["Cat"];
$img=$_GET["image"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "UPDATE `categorie` SET `nomCat`='$nom',`image`='$img' WHERE id_cat=$id";
$result = mysqli_query($con,$requette);
 header ("Location:gestionCat.php");
?>