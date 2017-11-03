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
       <?php include_once 'includes/db_connect.php'; ?>
        <?php include 'includes/header.php';?>
        <?php include 'includes/bannerhome.php';?> <!-- End of Banner Section -->

            <form action="azioni.php" id="aggiungi" class="simple-form" method="post" style="padding:3rem;">
            <input type="hidden" name="azione" value="aggiungi">
            <div class="container" style="border-right:1px dotted grey; border-left:1px dotted grey;">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    <h5>Scegli il tuo profilo:</h5>
                    <div class="panel">
                    <label class="radio-inline">
                        <input type="radio" id="studente" value="1" name="tipo" checked>
                        <div id="q1" class="question">Studente
                            
                        </div>
                        <div id="a1" class="answer collapse">
                            Gli studenti possono prendere in prestito contemporaneamente al massimo 5 libri e tenerli per un massimo di 2 mesi.
                        </div>
                    </label>  
                    </div>
                    <br>
                    <div class="panel" >
                    <label class="radio-inline">
                        <input type="radio" id="docente" value="2" name="tipo">
                        <div id="q1" class="question">Docente
                            
                        </div>
                        <div id="a1" class="answer collapse">
                        I docenti possono prendere in prestito contemporaneamente al massimo 10 libri e tenerli per un massimo di 3 mesi.
                        </div>
                    </label>  
                    </div>
                    <br>
                    <div class="panel">
                    <label class="radio-inline">
                        <input type="radio" id="altro" value="3" name="tipo">
                        <div id="q1" class="question">Altro
                            
                        </div>
                        <div id="a1" class="answer collapse">
                        Gli altri possono prendere in prestito contemporaneamente 3 libri e tenerli per un massimo di 3 settimane.
                        </div>
                    </label>  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cognome:</label>
                        <input type="text" class="form-control" id="cognome" name="cognome" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data:</label>
                        <input type="date" class="form-control" id="data" name="data" placeholder="amg">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sesso:</label>
                        
                            <label class="radio-inline">
                                <input type="radio" id="maschio" class="sesso" value="M" name="sesso" checked> M
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="femmina" class="sesso" value="F" name="sesso"> F
                            </label>
                    
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5">
                        <button type="submit" id="add" class="btn btn-default" style="background-color: #90abc5 ; color:#fff;">Registrati</button>
                        </form>
                    </div>
                </div>
            </div> 
            </form>                  
                   
                   
  


            <?php include 'includes/aboutus.php';?>
                        
        
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
        <!-- <script src="assets/js/vendor/bootstrap.min.js"></script> -->
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
<script>
   $(".question").on("click", function() {
            $(this).next().slideToggle();
            // $(".answer").slideToggle();
            $(this).children().toggle();
                // $(".arrow.down, .arrow.up").toggle();
        });
        
</script>

        


<script>
jQuery(document).ready(function(){
    jQuery("#aggiungi").on("submit", function(event) {
        event.preventDefault();
        var nome = jQuery("input[name='nome']").val();
        var cognome = jQuery("input[name='cognome']").val();
        var telefono = jQuery("input[name='telefono']").val();
        var data = jQuery("input[name='data']").val();
        var sesso = jQuery("input[name='sesso']").val();
        var email = jQuery("input[name='email']").val();
        var password = jQuery("input[name='password']").val();

        if (nome == "" || cognome == "" || telefono =="" || data == "" || email == "" || password == ""){
            alert("Inserisci tutti i dati");
        }else{
            jQuery(this).off('submit').submit();
        }
    });
});
</script>
        
</body>
</html>
