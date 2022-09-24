<?php 
$nomS=$_GET["Scat"];
$img=$_GET["image"];
$idS=$_GET["idCat"]; echo(" $nomS $img $idS");
$con=mysqli_connect("localhost","root","","pfa");
$requette = "INSERT INTO `souscat`(`id_Scat`, `nomSc`, `id_cat`, `image`) 
VALUES (null,'$nomS',$idS,'$img')";
 mysqli_query($con,$requette);
 header ("Location:gestionCat.php");
?>