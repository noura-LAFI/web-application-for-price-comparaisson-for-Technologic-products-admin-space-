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
<?php
$id=$_GET["id"];
$idM=$_GET["idM"];
$nomProd="";
$desc="";
$image="";
$idCat="";
$idScat="";
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette = "select * from produits,appartient  where produits.id_prd=$id
and produits.id_prd=appartient.id_prd AND appartient.id_Mag=$idM";
$result = mysqli_query($con,$requette);
while($produit=mysqli_fetch_array($result , MYSQLI_NUM)){
$nomProd=$produit[1];
$desc=$produit[2];
$image=$produit[3];
$idCat=$produit[4];
$idScat=$produit[5];
$etat=$produit[11];
}
?>
<main class="site-wrapper">
            <div class="pt-table">
                <div id="contact-form1"class="pt-tablecell page-contact relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
                                <div class="section-title clear">
                                    <h3>Modification produit </h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>
                                <form  action="modifierProduit1.php" method="get"> 
                                    <div class=" col-sm-6">
                                      
                                         <div class="">
                                            <label for="">Nom produit:</label>
                                            <input required type="text" class="form-control" value=<?php echo ($nomProd); ?>
                                             name="nomPro"  placeholder="Nom produit">
                                        </div>
                                        
                                        <div class="">
                                            <label for="">Description:</label>                                            
                                           <textarea  required   placeholder="Description" name="des"><?php echo ($desc); ?>
                                        </textarea> 
                                        </div>
                                    </div> <!-- ./col- -->
                                   <div class="separation" style=" right: 345px; height: 200px; background-color: rgb(0, 0, 0);"  > 
                                    </div>
                                    <div     class="col-sm-6">
                                    <div class="">
                                            <label for="">Image:</label>                                            
                                            <input type="file" required value=<?php echo ($image); ?>
                                             class="form-control" name="image" >
                                        </div>
                                        <div class="">
                                            <label for="">Etat:</label> <br>                                           
                                            <select value=<?php echo ($etat); ?> name="etat" >
                                                <option  value="En promo">En promo</option>
                                                <option    value="Pas de promo">Pas de promo</option>
                                            </select>
                                        </div>                                          
                                          <input type="hidden" name=id  value=<?php echo ($id);?>>
                                          <input type="hidden" name=idM  value=<?php echo ($idM);?>>

                                          <input type="hidden" name=idCat  value=<?php echo ($idCat);?>>
                                          <input type="hidden"  name=idScat   value=<?php echo ($idScat);?>>
                                        <div  style="padding-top: 28px;"   class="">
                                            <span class="btn-border">
                                                <input type="submit" class="btn btn-primary btn-custom-border text-uppercase" value=Modifier >
                                            </span>
                                        </div>
                                    </div> <!-- ./col- -->
                                </form> <!-- /.row -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    <!-- /.container -->
                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table --> 
           
        </main> 
</body>
</html>