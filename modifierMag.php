<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>Espace Admin</title>
        <!-- meta description -->
        <meta name="description" content="">
        <!-- mobile viwport meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fevicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800"
         rel="stylesheet">
        <link rel="stylesheet" href="css/themefisher-fonts.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link id="color-changer" rel="stylesheet" href="css/colors/color-0.css">
    </head>
    <body>
        <div  style=' top:50px; z-index:50;' class="preview-wrapper">
            <div style="height" class="switcher-body">
              <h3><a href="index.html">Accueil </a></h3>
          </div>
        </div>
        <nav style="position: fixed; top: 0px;  z-index: 4;background-color: #ebc32481  ; width: 100%; margin_bottom:100px; ">
        <div style="display: flex; justify-content: space-around;" >
        <h1> <a> Gestion Magazins </a>   </h1> <span><?php 
              session_start();
             echo("<img  style=height:15px; width:15px; src=img/green.png alt=>"); 
                   echo("  <b style= color:black; margin-right:0px;   > ".$_SESSION["nom"] ." 
                   " .$_SESSION["prenom"] ."</b>" );
              ?></span></div> </nav>
                <main   class="site-wrapper">
                             <div style=' margin-top:200px;' 
                               class="col-xs-12 col-sm-7 col-md-7  col-md-offset-1 col-lg-offset-2">
                                <div  class="section-title clear">
                                    <h3>Formulaire de modification </h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>
<?php               
$id=$_GET["id"];
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette = " select * from magasin where id_Mag=$id ";
$result = mysqli_query($con,$requette);
while($ligne=mysqli_fetch_array($result )){
$nomMag=$ligne["nom_Mag"];
$desc=$ligne["description"];
$image=$ligne["image"];
$tel=$ligne["tel"];
$site=$ligne["siteWeb"];

}  
?>
  <form  action="modifierMag1.php" method="get"> 
    <div class=" col-sm-6">
        <div class="">
            <label for="">Magazin:</label>
            <input required type="text" class="form-control" 
            name="nomMag1"    value="<?php echo("$nomMag"); ?>" placeholder="nom Magazin">
        </div>
        <div class="">
            <label for="">Description:</label>                                            
            <textarea required type="text" class="form-control"     value=<?php echo htmlentities($desc);?>  
            name='des1' placeholder='Description'></textarea>
        </div>
    </div>
<div class="separation" style=" right: 390px; height: 200px;
    background-color: rgb(0, 0, 0);"  > 
    </div>
    <div     class="col-sm-6">
    <div class="">
            <label for="">logo:</label>                                            
            <input required  value=<?php echo("$image"); ?>  type="file" class="form-control"
            name="logo1" placeholder="">
            <input required  value=<?php echo("$id"); ?>  type="hidden" class="form-control"
            name="id" placeholder="">
        </div>
        <div class="">
        <label for="">Telephone:</label>
  <input required type="text" class="form-control" value=<?php echo("$tel"); ?> name="tel" 
       placeholder="Telephone">
         </div>
         <div class="">
           <label for="">Site web:</label>
           <input required type="text" class="form-control" value=<?php echo("$site"); ?> name="site" 
             placeholder="Site web">
              </div>
        <div  style="padding-top: 28px;"   class="">
            <span class="btn-border">
                <button type="submit" class="btn btn-primary 
                btn-custom-border text-uppercase" >Valider</button>
            </span>
        </div>
    </div> 
</form> 
    </div>
        </main> <!-- /.site-wrapper -->
        <!-- ================================
        JavaScript Libraries
        ================================= -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery-validation.min.js"></script>
        <script src="js/form.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>





