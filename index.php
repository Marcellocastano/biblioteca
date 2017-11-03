
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="IT"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Biblioteca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-3.3.7/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->

        <?php include 'includes/header.php';?>
        <?php include 'includes/bannerhome.php';?> <!-- End of Banner Section -->


        <section id="register" class="register">
            <div class="container-fullwidth">
                <div class="row text-center">
                    <div class="col-sm-4 col-xs-4 no-padding">
                        <div class="single_register single_login">
                            <a href="login.php">Login</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4 no-padding">
                        <div class="single_register">
                            <a href="Register.php">Register</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4 no-padding">
                        <div class="single_register single_login">
                            <a href="">Login as Dipendent</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     

        <section class="libri">
            <div class="container">
            <h4>Ultimi Arrivi..<h4>
            <div class="row" id="libri">
            
              
            </div>
            </div>
        </section>

            <?php include 'includes/aboutus.php';?>
                        

                    </div>
                </div>
            </div>
        
        </section><!-- End of Pricing Section -->
        <section id="review">
        <?php include 'includes/review.php';?>
        </section>

        
        <?php include 'includes/social.php';?>

        
		
		<?php include 'includes/footer.php';?>





        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        
<script>


jQuery(document).ready(function() {
    var url= 'http://localhost/artoo/biblioteca/libri_JSON.php';

    jQuery.ajax({
         url:url,
         success: function(response){
            console.log(response);
                 jQuery.each(response, function(index, libro){
                     console.log(libro);
                  
                    let tumbnail= `
                   
                    <div class="col-md-3">
                        <div class="john">
                            <div class="thumbnail">
                                    <span class="copertina">
                                        <img src="${libro.copertina}"  id="copertina" alt="">
                                    </span>
                                <div class="caption">
                                    <h5>${libro.titolo}</h5>
                                    <h6><cite>${libro.autorenome} ${libro.autorecognome}</cite></h6>
                                </div>
                            </div>
                        </div>
                           
                    </div>`
                             
                    ;

                    jQuery("#libri").append(tumbnail);
                 
                 });
                  
         },
         error: function(errore){
             console.log(error);
 
         }
 
     });
    });
        
</script>
        

    </body>
</html>
