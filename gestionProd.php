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
        <h1>Gestion produits</h1> <span><?php 
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
            <h2  align=center > Liste des produits</h2><h2  align=right >___<a  href=#scrol1  >
     <img  height=40px width=40px   src=img/plus.svg alt=></a>___
 </h2><div style='margin-bottom:50px'   class='col-xs-12'>
                     <ul style='display:flex; list-style: none;'>
            <?php
                  $con=mysqli_connect("localhost","root","","pfa") or die (erreur);
                  $requette1 = " select * from magasin ";
                  $result1 = mysqli_query($con,$requette1);
                  while($ligne1=mysqli_fetch_array($result1 , MYSQLI_NUM)){
                 echo("    
                       <li style='color: #d6ad08; font-size:20px; margin-left:30px; 
                       text-decoration-style: solid;  '>
                       <a href='gestionProd.php?idM=$ligne1[0]'> Produits $ligne1[1] </a>  </li>
                   ");
                  }   
                  ?> <hr>
                     </ul>
                 </div>
             </div>
            <table  style=" width:85%; "  class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">Produits</th> 
                  <th scope="col">Descriptions</th>
                  <th scope="col">Photo</th>
                  <th scope="col">Magasin</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                  <?php
                  if(empty($_GET["idM"])){
                  $con=mysqli_connect("localhost","root","","pfa") or die (erreur);
                  $requette = " select * from produits ,appartient where produits.id_prd=appartient.id_prd; ";
                  $result = mysqli_query($con,$requette);
                  while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
            $requette18 = " select * from magasin where id_Mag=$ligne[7] ";
                    $result18 = mysqli_query($con,$requette18);
                    while($ligne18=mysqli_fetch_array($result18 , MYSQLI_NUM)){
                 echo("<tr  > <td>$ligne[1]</td>
                       <td>$ligne[2]</td>
                       <td>$ligne18[1]</td>
                   <td> <img  height=100px width=100px  src= img/$ligne[3]></td>
                   <td> ___
                   <a  href='modifierProduit.php?id=$ligne[0]&amp;idM=$ligne[7]'> 
                      <img  height=30px width=30px   src=img/pencil.svg alt=></a>___
                   <a  href='supprimerProduit.php?id=$ligne[0]' >   
                    <img height=20px width=20px  src=img/trash.svg alt=></a> </td>
                 </tr>");
                  } }}  
                  ?>
                    <?php
                  if(isset($_GET["idM"])){
                      $idM=$_GET["idM"];
                  $con=mysqli_connect("localhost","root","","pfa") or die (erreur);
                  $requette2 = " SELECT * FROM produits,appartient WHERE appartient.id_Mag=$idM 
                  and produits.id_prd=appartient.id_prd";
                  $result2 = mysqli_query($con,$requette2);
                  while($ligne2=mysqli_fetch_array($result2 , MYSQLI_NUM)){
                 echo("<tr  > <td>$ligne2[1]</td>
                       <td>$ligne2[2]</td>
                   <td> <img  height=100px width=100px     src= img/$ligne2[3]></td>
                   <td> ___
                   <a  href=modifierProduit.php?id=$ligne2[0]&amp;idM=$ligne2[7]>  
                     <img  height=30px width=30px   src=img/pencil.svg alt=></a>___
                   <a  href= supprimerProduit.php?id=$ligne2[0]>    <img height=20px width=20px  src=img/trash.svg alt=></a> </td>
                 </tr>");
                  } }  
                  
                  ?>
              </tbody>
            </table>
          </div>
          <hr id=scrol1   >
                            <div style=' margin-top:100px;'   class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1
                             col-lg-offset-2">
                                <div   class="section-title clear">
                                    <h3>Formulaire d'ajout </h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>



                                <form  action="ajouterProduit.php" method="get"> 
                                    <div class=" col-sm-6">
                                       
                                    <div class="">
                                            <label for="">Produit:</label>
                                            <input required type="text" class="form-control"  name="produit" 
                                             placeholder="">
                                        </div>

                                        <div class="">
                                            <label for="">Description:</label>                                            
                                            <textarea     required type="text" class="form-control" name="des" 
                                            placeholder="Description"></textarea>
                                      </div>
                                       
                                    </div>
                                   <div class="separation" style=" right: 345px; height: 200px; 
                                   background-color: rgb(0, 0, 0);"  > 
                                    </div>
                                    <div     class="col-sm-6">
                                   
                                    
                                    <div class="">
                                            <label for="">Image:</label>                                            
                                            <input required   type="file" class="form-control"
                                             name="image" placeholder="">
                                        </div>
                                       <?php 
                                    echo("<div class=''>
                                            <label for=>Sous-Categorie:</label>
                                            <select name='Scat'   >") ;   
$con=mysqli_connect("localhost","root","","pfa");
$requette18 = "select * from souscat";
 $resultat18=mysqli_query($con,$requette18);
 while($ligne11=mysqli_fetch_array($resultat18, MYSQLI_NUM)){
      echo("<option  value='$ligne11[1]' >$ligne11[1]</option>") ;    }                             
?>
  </select>
 </div>
 <div  style="padding-top: 28px;"   class="">
 <span class="btn-border">
 <button type="submit" class="btn btn-primary btn-custom-border 
                                                text-uppercase" >Ajouter</button>
                                            </span>
                                        </div>
                                    </div> 
                                </form> 
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    <!-- /.container -->
                </div> <!-- /.pt-tablecell -->
             <!-- /.pt-table --> 
           
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