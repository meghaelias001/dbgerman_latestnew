<!DOCTYPE html>
<?php
session_start();
 if(!isset($_SESSION['ab4']))
{
	header('location:index.html');
	exit();
} 
?>
<style type="text/css">
.formError .formErrorContent {
    width: 100%;
    background: #ee0101;
    position: absolute;
    color: #ffffff;
    min-width: 230px !important;
    font-size: 12px;
    padding: 0 15px;
    bottom: 0px !important;
    left: -50px !important;
}
    .switch-field {
  
   
    text-align: center;
    margin: 0px auto;
    display: inline-block;
}

.switch-title {
  margin-bottom: 6px;
  font-weight: normal;
}

.switch-field input {
    position: absolute !important;
    clip: rect(0, 0, 0, 0);
    height: 1px;
    width: 1px;
    border: 0;
    overflow: hidden;
}

.switch-field label {
  float: left;
}

.switch-field label {
  display: grid;
  width: 100%;
  background-color: #fff;
  color: rgba(0, 0, 0, 1);
  font-size: 14px;
  font-weight: bold;
  text-align: center;
  text-shadow: none;
  padding: 6px;
  min-height: 115px;
  border: 1px solid #000;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.switch-field label:hover {
    cursor: pointer;
}

.switch-field input:checked + label {
  background-color: #fff;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 4px solid #04a200;
}

/*.switch-field label:first-of-type {
  border-radius: 4px 0 0 4px;
}

.switch-field label:last-of-type {
  border-radius: 0 4px 4px 0;
}*/
</style>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <!-- Favicon -->
    <link rel="icon" href="img/fav-icon.png" type="image/png" />
    
    <title>Abschlussfragebogen V (von VIII)</title>
    
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
    <header >
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#small_nav"
                        aria-expanded="false">
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
                    
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Big Menu -->
        <nav class="navbar navbar-default navbar-static-top big_menu" id="main_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="main_nav">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown main_menu">
                                        <a href="abschlussfragebogen-1.php" class="dropdown-toggle drop_menu">Fragen I</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="abschlussfragebogen-2.php" class="dropdown-toggle drop_menu">Fragen II</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="abschlussfragebogen-3.php" class="dropdown-toggle drop_menu">Fragen III</a>
                                    </li>
                                    <li class="main_menu">
                                        <a href="abschlussfragebogen-4.php" class="dropdown-toggle drop_menu">Fragen IV</a>
                                    </li>
									<li class="main_menu active">
                                        <a href="abschlussfragebogen-5.php" class="dropdown-toggle drop_menu">Fragen V</a>
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
                            </div><!-- /.navbar-collapse -->
                <div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <!-- End Header Area -->
    

    
 

			 <section class="section" id="feedbackScreen">
                <div class="container">

                    <div class="col-md-12">
            <div class="col-md-12 no-gutter">
                <h2 class="text-center pb30">Abschlussfragebogen V (von IX)</h2>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <!-- <p class="text-center ">
                    Um Ihnen eine Empfehlung zur Verteilung Ihrer Finanzanlagen geben zu können, benötigen wir einige Angaben. Bitte beantworten Sie die folgenden sechs Fragen auf den Seiten 'Fragebogen I' bis 'Fragebogen VI'.
                </p> -->
                <hr>
            </div>
        </div>

                                <div class="col-md-12">   
        <form id="submitform" action="abfrage5_proc.php" method="POST">
               
                <div class="form-row">
                    <div class="clearfix">
                    <h5 class="pb15">Für welche dieser Lotterien würden Sie Sich entscheiden?</h5>  
                </div>

                <div class="col-md-12">
                    <div class="switch-field col-md-2">
                                <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew2" id="lotteryA"   value="1" />
                                <label for="lotteryA">Lottery A
                                    <div class="switch-title" style="height:20%">10 mit 100%</div>
                                </label>

                            </div>
                            <div class="switch-field  col-md-2">
                                <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew2" id="lotteryB" value="2" />
                                <label for="lotteryB">Lottery B
                                    <div class="switch-title">18 mit 50% <br> Oder <br> 6 mit 50%</div>
                                </label>
                            </div>

                            <div class="switch-field col-md-2">
                                <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew2" id="lotteryC" value="3" />
                                <label for="lotteryC">Lottery C
                                    <div class="switch-title">26 mit 50% <br> Oder <br> 2 mit 50%</div>
                                </label>
                            </div>
                            <div class="switch-field col-md-2">
                                <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew2" id="lotteryD" value="4" />
                                <label for="lotteryD">Lottery D
                                    <div class="switch-title">34 mit 50% <br> Oder <br> -2 mit 50%</div>
                                </label>
                            </div>
                            <div class="switch-field col-md-2">
                                <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew2" id="lotteryE" value="5" />
                                <label for="lotteryE">Lottery E
                                    <div class="switch-title">42 mit 50% <br> Oder <br> -6 mit 50%</div>
                                </label>
                            </div>
                    
                   

                    
                   
                
                


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
    history.pushState({ warnOnBack: true }, document.title, "");

    window.onpopstate = function(e) {
        if (confirm("Achtung. Hiermit werden Ihre Daten nicht weiter gespeichert und die Studie wird beendet")) {
            location.href = "prematureStudyAbortion.html"
        } else {
            history.pushState({ warnOnBack: true }, document.title, "");
        }
    };
    </script>
	<script>
 $(document).ready(function () {
        $("#submitform").validationEngine();
         })
	 
</script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js"></script>

</body>

</html> 