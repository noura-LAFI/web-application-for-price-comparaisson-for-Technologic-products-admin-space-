<?php
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette=" DELETE FROM produits WHERE id_prd = $id ";
mysqli_query($con,$requette);
 header("Location:gestionProd.php");
?> 