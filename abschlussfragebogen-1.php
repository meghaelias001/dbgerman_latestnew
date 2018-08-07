<!DOCTYPE html>
<?php
session_start();
$submitted_data= $_SESSION['submitted_data'];
 if(!isset($_SESSION['distribution']))
{
    header('location:index.html');
    exit();
} 
?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="img/fav-icon.png" type="image/png" />
        <title>Abschlussfragebogen I (von IV)</title>
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="vendors/animate/animate.css" rel="stylesheet">
        <!-- Icon CSS-->
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/et-line-icon/et-line.min.css">
        <!-- Flexslider CSS-->
        <link rel="stylesheet" type="text/css" href="vendors/flexslider/flexslider.css" media="all">
        <!-- Pop Up-->
        <link rel="stylesheet" type="text/css" href="vendors/popup/lightbox.css" media="all">
        <!-- Owlcarousel CSS-->
        <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css" media="all">
        <!--Theme Styles CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="loading">
            <div class="preloader">
                <span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span>
            </div>
        </div>
        <!-- Header Area -->
        <header>
            <div class="container">
                <div class="row header_top">
                    <div class="col-md-7 col-sm-5 col-xs-7">
                        <div class="m0">
                            <div class="logo_part">
                                <a class="logo">
                                    <h3><span>Studie</span><span>Investitionsempfehlung</span></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contact_info col-md-5 col-sm-7 col-xs-12">
                        <div class="clearfix">
                            <div class="uni-logo-holder inner-page">
                                <img src="img/logo.PNG">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Small Menu -->
            <nav class="navbar navbar-default navbar-static-top small_menu" id="small_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="logo_part">
                                <a href="index.html" class="logo">
                                    <h3><span>Studie</span><span>Investitionsempfehlung</span></h3>
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#small_nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="small_nav">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown main_menu active">
                                        <a href="index.html" class="drop_menu">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html">Definitions</a>
                                    </li>
                                    <li>
                                        <a href="instructions.html">Instructions</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
            <!-- Big Menu -->
            <nav class="navbar navbar-default navbar-static-top big_menu" id="main_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="main_nav">
                                <ul class="nav navbar-nav">
                                    <li class="main_menu active">
                                        <a href="abschlussfragebogen-1.php" class="dropdown-toggle drop_menu">Fragen I</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen II</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen III</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen IV</a>
                                    </li>
									 <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen V</a>
                                    </li>
									 <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen VI</a>
                                    </li>
									 <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen VII</a>
                                    </li>
									 <li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen VIII</a>
                                    </li>
									<li class="main_menu">
                                        <a href="#" class="dropdown-toggle drop_menu">Fragen IX</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- End Header Area -->
        <section class="section" id="feedbackScreen">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-12 no-gutter">
                        <h2 class="text-center pb30">Abschlussfragebogen I (von IX)</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center ">
                            Ihre Investititionsempfehlung: Investieren Sie
                            <?php echo $submitted_data['optimised_value'];?> % Ihrer Ersparnisse in Aktienfonds und
                            <?php echo (100-$submitted_data['optimised_value']);?> % in ein Sparkonto.
                            <br> Bitte beantworten Sie die folgenden Fragen zu Ihrer Investitionsempfehlung und Ihrem eigenen Investitionsverhalten.
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="submitform" action="abfrage1_proc.php" method="POST">
                            <div class="form-row">
                                <div class="clearfix">
                                    <h5 class="pb15">1. Wie zufrieden sind Sie mit Ihrer Anlageempfehlung?</h5>
                                </div>
                                <div class="clearfix">
                                   
                                        <div class="col-md-1 col-xs-1">
                                       
                                        <input value="1" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1a">&nbsp;
                                           
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                       
                                                    <input value="2" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="slider1" id="slider1b">&nbsp;
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="3" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1c">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="4" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1d">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="5" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1e">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="6" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1f">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="7" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1g">&nbsp;
                                           
                                    </div>
									
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="8" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1h">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="9" type="radio" name="slider1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider1i">&nbsp;
                                           
                                   </div>  
								   </div>
								    <div class="clearfix">
                                             <div class="col-md-1 col-xs-1">&nbsp;1</div>
											 <div class="col-md-1 col-xs-1">&nbsp;2</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;3</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;4</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;5</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;6</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;7</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;8</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;9</div>
                                        </div>
                                        <div class="row pb15">
                                            <div class="col-md-4 col-xs-4 text-left wrd-brk">Sehr unzufrieden</div>
                                            <div class="col-md-5 col-xs-5 text-right wrd-brk">Sehr zufrieden</div>
                                        </div>
                                    </div>
                            <div class="form-row">
                                <div class="clearfix">
                                    <h5 class="pb15">2. Für wie überzeugend halten Sie Ihre Anlageempfehlung?</h5>
                                </div>
                               <div class="clearfix">
                                   
                                        <div class="col-md-1 col-xs-1">
                                       
                                        <input value="1" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2a">&nbsp;
                                           
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                       
                                                    <input value="2" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="slider2" id="slider2b">&nbsp;
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="3" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2c">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="4" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2d">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="5" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2e">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="6" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2f">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="7" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2g">&nbsp;
                                           
                                    </div>
									
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="8" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2h">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="9" type="radio" name="slider2"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider2i">&nbsp;
                                           
                                   </div>  
								   </div>
								    <div class="clearfix">
                                             <div class="col-md-1 col-xs-1">&nbsp;1</div>
											 <div class="col-md-1 col-xs-1">&nbsp;2</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;3</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;4</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;5</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;6</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;7</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;8</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;9</div>
                                        </div>
                                        <div class="row pb15">
                                            <div class="col-md-4 col-xs-4 text-left wrd-brk">Überhaupt nicht überzeugend</div>
                                            <div class="col-md-5 col-xs-5 text-right wrd-brk">Sehr überzeugend</div>
                                        </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="clearfix">
                                    <h5 class="pb15">3. Für wie sinnvoll halten Sie die Methode zur Ermittlung der Anlageempfehlung?</h5>
                                </div>
                                 <div class="clearfix">
                                   
                                        <div class="col-md-1 col-xs-1">
                                       
                                        <input value="1" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3a">&nbsp;
                                           
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                       
                                                    <input value="2" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="slider3" id="slider3b">&nbsp;
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="3" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3c">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="4" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3d">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="5" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3e">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="6" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3f">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="7" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3g">&nbsp;
                                           
                                    </div>
									
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="8" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3h">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="9" type="radio" name="slider3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider3i">&nbsp;
                                           
                                   </div>  
								   </div>
								    <div class="clearfix">
                                             <div class="col-md-1 col-xs-1">&nbsp;1</div>
											 <div class="col-md-1 col-xs-1">&nbsp;2</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;3</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;4</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;5</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;6</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;7</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;8</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;9</div>
                                        </div>
                                        <div class="row pb15">
                                            <div class="col-md-4 col-xs-4 text-left wrd-brk">Sehr unsinnig</div>
                                            <div class="col-md-5 col-xs-5 text-right wrd-brk">Sehr sinnvoll</div>
                                        </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="clearfix">
                                    <h5 class="pb15">4. Wie akzeptabel fanden Sie die Methode zur Ermittlung der Anlageempfehlung?
                                    </h5>
                                </div>
                               <div class="clearfix">
                                   
                                        <div class="col-md-1 col-xs-1">
                                       
                                        <input value="1" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4a">&nbsp;
                                           
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                       
                                                    <input value="2" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="slider4" id="slider4b">&nbsp;
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="3" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4c">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="4" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4d">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="5" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4e">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="6" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4f">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="7" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4g">&nbsp;
                                           
                                    </div>
									
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="8" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4h">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="9" type="radio" name="slider4"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider4i">&nbsp;
                                           
                                   </div>  
								   </div>
								    <div class="clearfix">
                                             <div class="col-md-1 col-xs-1">&nbsp;1</div>
											 <div class="col-md-1 col-xs-1">&nbsp;2</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;3</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;4</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;5</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;6</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;7</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;8</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;9</div>
                                        </div>
                                        <div class="row pb15">
                                            <div class="col-md-4 col-xs-4 text-left wrd-brk">Sehr unakzeptabel</div>
                                            <div class="col-md-5 col-xs-5 text-right wrd-brk">Sehr akzeptabel</div>
                                        </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="clearfix">
                                    <h5 class="pb15">5. Wie gut bildet die Anlageempfehlung Ihre Investitions-Vorlieben ab?
                                        </h5>
                                </div>
                               <div class="clearfix">
                                   
                                        <div class="col-md-1 col-xs-1">
                                       
                                        <input value="1" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5a">&nbsp;
                                           
                                    </div>
                                    <div class="col-md-1 col-xs-1">
                                       
                                                    <input value="2" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="slider5" id="slider5b">&nbsp;
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="3" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5c">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="4" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5d">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="5" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5e">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="6" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5f">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="7" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5g">&nbsp;
                                           
                                    </div>
									
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="8" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5h">&nbsp;
                                           
                                    </div>
									<div class="col-md-1 col-xs-1">
                                       
                                        <input value="9" type="radio" name="slider5"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="slider5i">&nbsp;
                                           
                                   </div>  
								   </div>
								    <div class="clearfix">
                                             <div class="col-md-1 col-xs-1">&nbsp;1</div>
											 <div class="col-md-1 col-xs-1">&nbsp;2</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;3</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;4</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;5</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;6</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;7</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;8</div>
                                             <div class="col-md-1 col-xs-1">&nbsp;9</div>
                                        </div>
                                        <div class="row pb15">
                                            <div class="col-md-4 col-xs-4 text-left wrd-brk">Sehr schlecht</div>
                                            <div class="col-md-5 col-xs-5 text-right wrd-brk">Sehr gut</div>
                                        </div>
                                
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Weiter" />
                                <hr>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php';?>
        <!-- jQuery JS -->
        <script src="js/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Pop Up -->
        <script src="vendors/popup/lightbox.min.js"></script>
        <!-- Animate JS -->
        <script src="vendors/animate/wow.min.js"></script>
        <!-- Isotope -->
        <script src="vendors/isotop/isotope-docs.min.js"></script>
        <!-- Counterup JS -->
        <script src="vendors/counter/waypoints.min.js"></script>
        <script src="vendors/counter/jquery.counterup.min.js"></script>
        <!-- Theme JS -->
        <script src="js/theme.js"></script>
        <script>
        $(document).ready(function() {
            $("#submitform").validationEngine();
        })
        </script>
        <script>
        history.pushState({ warnOnBack: true }, document.title, "");

        window.onpopstate = function(e) {
            if (confirm("Achtung. Hiermit werden Ihre Daten nicht weiter gespeichert und die Studie wird beendet")) {
                location.href = "prematureStudyAbortion.html"
            } else {
                history.pushState({ warnOnBack: true }, document.title, "");
            }
        };
        </script>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js"></script>
        <script src="js/bootstrap-slider.js"></script>
    </body>

    </html>