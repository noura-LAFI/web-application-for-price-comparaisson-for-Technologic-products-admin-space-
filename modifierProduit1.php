<?php 
$id=$_GET["id"];
$idM=$_GET["idM"];
$nomProd=$_GET["nomPro"];
$desc=$_GET["des"];
$image=$_GET["image"];
$etat=$_GET["etat"];
$idCat=$_GET["idCat"];
$idScat=$_GET["idScat"];
$con=mysqli_connect("localhost","root","","pfa");
$requette = "UPDATE `produits` SET `nom_prd`='$nomProd',`description`='$desc',
`image`='$image',`id_cat`=$idCat,`idSousCat`=$idScat WHERE id_prd=$id";
$result = mysqli_query($con,$requette);
 header ("location:gestionProd.php");
?>