<?php
$image=$_GET["image"];
$cat=$_GET["cat"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette="insert into categorie values(null, '$cat','$image')";
mysqli_query($con,$requette);
 header("Location:gestionCat.php");
?>