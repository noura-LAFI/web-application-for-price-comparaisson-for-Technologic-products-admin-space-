<?php
$nomMag=$_GET["nomMag"];
$descrip=$_GET["des"];
$logo=$_GET["logo"];
$tel=$_GET["tel"];
$site=$_GET["site"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette="insert into magasin values(null, '$nomMag','$descrip','$logo',$tel,'$site')";
mysqli_query($con,$requette);
 header("Location:gestionMag.php");
?>