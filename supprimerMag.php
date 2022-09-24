<?php
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette=" DELETE FROM magasin WHERE id_Mag = $id ";
mysqli_query($con,$requette);
 header("location:gestionMag.php");
?> 