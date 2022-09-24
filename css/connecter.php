<?php
$login=$_GET["nom"];
$motDePass=$_GET["mot"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette = " select id from membre where nomUtilisateur ='$login' and mot2Pass='$motDePass'";
$result = mysqli_query($con,$requette);
$vide=0;
while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
$vide=$vide+1;
}
if($vide==0){
    echo(" pas de resultat ");
}
 header("location:gestionMag.php#contact-form1");
?>