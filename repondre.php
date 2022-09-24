<?php 
$id=$_GET["id"];
$rep=$_GET["rep"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "INSERT INTO `reponses`(`idRep`, `reponse`, `idQ`) VALUES (null,'$rep',$id)";
 mysqli_query($con,$requette);
header ("Location:gestionContacte.php");
?>