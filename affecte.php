<?php 
$idP=$_GET["id"];
$nom=$_GET["magasin"];
$etat=$_GET["etat"];
$prixP=$_GET["prixPro"];
$prix=$_GET["prix"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "INSERT INTO `appartient`(`id`, `id_Mag`, `id_prd`, `prix`, `prix_promo`, `etat`) 
VALUES (null,(select  id_Mag from magasin where nom_Mag ='$nom' ),$idP,$prix,$prixP,'$etat')";
 mysqli_query($con,$requette);
 header ("Location:affecterProduit.php?id=$idP");
?>