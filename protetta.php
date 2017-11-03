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
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
        <?php 
            $query = 'SELECT * FROM utente';
            $bound = array();

            $stmt = $db->prepare($query);
            $stmt->execute($bound);
            
            $num = $stmt->rowCount();
            $li='';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id'];
            $li.= '<li><a href="azioni.php?azione=cancella&id='.$id.'"><i class="fa fa-times-circle" aria-hidden="true"></i> Cancella profilo</a></li>';
            }
        ?>

        
<header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-2x fa-book" aria-hidden="true"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Libri più noleggiati</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Libri più votati</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Libri non disponibili</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Ultimi arrivi</a></li>
                                        </ul>
                                    </ul>
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/images/biblio-logo.png" class="img-responsive" id="logo" alt=""/></a>
                                    </div>
                                        <ul class="nav navbar-nav navbar-right">
                                        </li>
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#review">Review</a></li>
                                            <li><a href="#social">Social</a></li>
                                            <li><a href="#footer">Support</a></li>
                                            <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-2x fa-user-circle" aria-hidden="true"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> I miei libri</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                            <li role="separator" class="divider"></li>
                                            <?php
                                            echo $li;
                                            ?>
                                        </ul>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                      
                        </div>	
                    </div>

                </div>

            </div>
        </header>




        <?php include 'includes/bannerhome.php';?> <!-- End of Banner Section -->


        
     

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
        <?php include 'includes/review.php';?>
        <!-- <?php include 'includes/review.php';?> -->

        
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
                                        <img src="${libro.copertina}" class="img-responsive" id="copertina" alt="">
                                    </span>
                                <div class="caption">
                                    <h5>${libro.titolo}</h5>
                                    <h6><cite>${libro.autorenome} ${libro.autorecognome}</cite></h6>
                                    <p><a href="#" class="btn btn-primary" role="button">Noleggia</a> 
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
