<?php 
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "delete from categorie where id_cat=$id";
$result = mysqli_query($con,$requette);
 header ("location:gestionCat.php");
?>