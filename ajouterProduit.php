<?php
$nomProd=$_GET["produit"];
$desc=$_GET["des"];
$image=$_GET["image"];
$Scat =$_GET["Scat"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette="INSERT INTO `produits`(`id_prd`, `nom_prd`, `description`, `image`, `id_cat`, `idSousCat`)
VALUES (null,'$nomProd','$desc','$image',(select id_cat from souscat where nomSc='$Scat')
,(select id_Scat from souscat where nomSc='$Scat'))";
mysqli_query($con,$requette);
$requette2="select id_prd from produits where	nom_prd ='$nomProd '    ";
$res=mysqli_query($con,$requette2);
while($ligne11=mysqli_fetch_array($res , MYSQLI_NUM)){
    header("location:affecterProduit.php?id=$ligne11[0]");}
?>