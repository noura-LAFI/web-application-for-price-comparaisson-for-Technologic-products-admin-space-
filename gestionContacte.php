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
        <nav style="position: fixed; top: 0px;  z-index: 4;background-color: #ebc32481  ; width: 100%; margin_bottom:100px; ">
        <div style="display: flex; justify-content: space-around;" >
        <h1>Gestion reponses</h1> <span><?php 
   session_start();
 echo("<img  style=height:15px; width:15px; src=img/green.png alt=>"); 
   echo("  <b style= color:black; margin-right:0px;   > ".$_SESSION["nom"] ." " .$_SESSION["prenom"] ."</b>" );
   ?></span></div> </nav>
        <main   class="site-wrapper">
            <div class="pt-table">
                <div id="contact-form1"class="pt-tablecell page-contact relative">
                    <div   class="container">
                        <div  class="row">
                        <div  style='margin-left:-50px; margin-top: 150px;'>
            <h2  align=center    > Liste des questions</h2><h2  align=right >___<a  href=#scrol1  >  
                  <img  height=40px width=40px   src=img/plus.svg alt=></a>___
 </h2>
            <table  style=" width:85%; "  class="table table-sm">
              <thead>
                <tr>
                  <th scope="col"></th> 
                </tr>
              </thead>
              <tbody>
                  <?php
                  $con=mysqli_connect("localhost","root","","pfa") or die("erreur");

                  $requette = " select * from contacte    ";
                  $result = mysqli_query($con,$requette);
                  $i=1;
                  while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
                  
                  echo("<h6 style='color: red;'>Question $i:</h6>$ligne[1] ");
                  
                  $requette1 = " select * from reponses where idQ =  $ligne[0]  ";
                  $result1 = mysqli_query($con,$requette1);
                  $rowcount=mysqli_num_rows($result1);
                  if($rowcount==0){
                    echo("<h6 style='color: green;'> Réponse $i:</h6> 
                   Pas de reponse pour le moment <br>  <a     href=repondre1.php?id=$ligne[0]> Ajouter reponse </a> ") ;}
                    else{
                  while($ligne1=mysqli_fetch_array($result1 , MYSQLI_NUM)){
                   
                   echo(" <h6 style='color: green;'> Réponse $i:</h6> 
                    $ligne1[1] ");
                   }}$i++;
                   echo("<hr style='color:#62aaa7; height:2px;'   >");
                  }
                  ?>
              </tbody>
            </table>
          </div>
          <hr id=scrol1   >
 
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