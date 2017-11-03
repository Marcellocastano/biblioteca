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
        <?php
        if (isset($_GET['errore']) && $_GET['errore'] == 1){
            echo '<div class="container" style="padding:2rem; color:red; ">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <h5>Username e/o password non corrette</h5>
                            </div>
                        </div>
                    </div>';
        }
        
        ?>

<form action="check_login.php" id="contact-form" class="simple-form" method="post" style="padding:3rem;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="utente" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5">
            <button type="submit" class="btn btn-default" style="background-color: #90abc5 ; color:#fff;">Login</button>
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


jQuery(document).ready(function() {
  $("#contact-form").on("submit",function(event){
      event.preventDefault();
       var url= 'http://localhost/artoo/biblioteca/check_login.php';
      var data={};
       data.id= $("#id").val();
      data.utente= $("#utente").val();
      data.password= $("#password").val();
  jQuery.ajax({
       url:url,
       type: "POST",
       data: JSON.stringify(data),
       processData: false,
       success: function(response){
       console.log(response);
                 if(response.esito==true) {
                  localStorage.setItem(response.id, response.email);
                  location.href = 'protetta.php';
                   }
                   else{
                  location.href = 'login.php?errore=1';    
                   }
               
       },
       error: function(errore){
           console.log(error);

       }

   });
  });
});

      
</script>
        

    </body>
</html>
