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
        <!-- ================================
        CSS Files
        ================================= -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/themefisher-fonts.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link id="color-changer" rel="stylesheet" href="css/colors/color-0.css">
    </head>
    <body>
        <div  style=' top:50px; z-index:50;' class="preview-wrapper">
            <span></span>
            <div style="height" class="switcher-body">
              <h3><a href="index.php">Accueil </a></h3>
           </div>
        </div>
        <nav style="position: fixed; top: 0px;  z-index: 4;background-color: #ebc32481  ;
         width: 100%; margin_bottom:100px; ">
        <div style="display: flex; justify-content: space-around;" >
        <h1>Gestion Sous-Categories</h1> <span><?php 
   session_start();
 echo("<img  style=height:15px; width:15px; src=img/green.png alt=>"); 
   echo("  <b style= color:black; margin-right:0px;   > ".$_SESSION["nom"] ." " .$_SESSION["prenom"] ."</b>" );
   ?></span></div> </nav>
        <main   class="site-wrapper">
            <div class="pt-table">
                <div id="contact-form1"class="pt-tablecell page-contact relative">
                    <div   class="container">
                        <div  class="row">
                        <div  style='margin-left:-50px; margin-top: 50px;'>
            <h2  align=center> Page d'affectation des  Sous-Categories </h2><h2  align=right >
                </h2>
          </div>
          <hr   >
                            <div style=' margin-top:100px;'   class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1
                             col-lg-offset-2">
                                <div   class="section-title clear">
                                    <h3>Formulaire d'affectation </h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>
                             
                                <form  id=scrol1 action="ajouterSCat.php" method="get"> 
                                    <div class=" col-sm-6">
                                        <div class="">
                                            <label for="">Sous-Categories:</label>
                                            <input required type="text" class="form-control"  name="Scat" 
                                             placeholder="">
                                        </div>
                                        <input required type="hidden" class="form-control" 
                                        value =<?php $id=$_GET["id"]; echo("$id");  ?>  name="idCat" 
                                             placeholder="">
                                             <div class="">
                                            <label for="">Image:</label>
                                            <input required type="file" class="form-control"  name="image" 
                                             placeholder="">
                                        </div>
                                        <div  style="padding-top: 28px;"   class="">
                                            <span class="btn-border">
                                                <input type="submit" class="btn btn-primary btn-custom-border 
                                                text-uppercase" value= Affecter>
                                            </span>
                                        </div>
                                    </div> 
                                </form> 
                            </div>
                           
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    <!-- /.container -->
                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table --> 
           
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