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
$con=mysqli_connect("localhost","root","","pfa") or die (erreur);
$requette = "select * from categorie where id_cat=$id";
$result = mysqli_query($con,$requette);
while($produit=mysqli_fetch_array($result , MYSQLI_NUM)){
$cat=$produit[1];
$image=$produit[2];
echo("$cat");
}
?>
<main class="site-wrapper">
            <div class="pt-table">
                <div id="contact-form1"class="pt-tablecell page-contact relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
                                <div class="section-title clear">
                                    <h3>Modification categorie </h3>
                                    <span class="bar-dark"></span>
                                    <span class="bar-primary"></span>
                                </div>
                                <form  action="ModifCat.php" method="get"> 
                                    <div class=" col-sm-6">
                                      
                                         <div class="">
                                            <label for="">Nom categorie:</label>
                                            <input required type="text" class="form-control" value=<?php echo("$cat"); ?>
                                             name="Cat"  placeholder="">
                                        </div>
                                    <div class="">
                                            <label for="">Image:</label>                                            
                                            <input type="file" required value=<?php echo("$image"); ?>
                                             class="form-control" name="image" >
                                        </div>
                                               <input type="hidden" name=id  value=<?php echo ("$id");?>>

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