<!DOCTYPE html>

<?php

session_start();

 if(!isset($_SESSION['ab7']))

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

        <title>Abschlussfragebogen V (von IX)</title>

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

                                    <li class="dropdown main_menu">

                                        <a href="#" class="dropdown-toggle drop_menu">Fragen I</a>

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

                                    <li class="main_menu active">

                                        <a href="abschlussfragebogen-8.php" class="dropdown-toggle drop_menu">Fragen VIII</a>

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

                        <h2 class="text-center pb30">Abschlussfragebogen VIII (von IX)</h2>

                    </div>

                    <div class="col-md-10 col-md-offset-1">

                        <!-- <p class="text-center ">

                            Wie gut kennen Sie sich mit dem Aktienmarkt aus? Bitte beantworten Sie die folgenden Fragen uber den Actienmarkt so gut Sie konnen.

                        </p> -->

                        <hr>

                    </div>

                </div>

                <div class="col-md-12">

                    <form id="submitform" action="abfrage8_proc.php" method="POST">

                        <div class="form-row">

                            <div class="clearfix">

                                <h5 class="pb15">1. Wenn ein Investor sein Geld auf verschiedene Anlageformen aufteilt, dann wird das Risiko eines Totalverlustes: </h5>

                            </div>

                            <div class="col-md-12">

                                <div class="radio-bx pb15">

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" name="abfrageNew51" id="abfrageNew51" value="1"> Steigen

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew51" id="abfrageNew51" value="2"> Fallen

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew51" id="abfrageNew51" value="3">Gleich bleiben

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew51" id="abfrageNew51" value="4">Ich weiss es nicht</label>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="clearfix">

                                <h5 class="pb15">2. Wenn Sie eine Anleihe mit einer Laufzeit von 10 Jahren kaufen, können Sie nicht ohne eine Geldstrafe nach 5 Jahren verkaufen?</h5>

                            </div>

                            <div class="col-md-12">

                                <div class="radio-bx pb15">

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew52" id="abfrageNew52" value="1"> Richtig

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew52" id="abfrageNew52" value="2"> Falsch

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew52" id="abfrageNew52" value="3">Ich weiss es nicht</label>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <h5 class="pb15">3. Aktien sind normalerweise riskanter als festverzinsliche Anleihen?

                            </h5>

                            <div class="col-md-12">

                                <div class="radio-bx pb15">

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew53" id="abfrageNew53" value="1"> Richtig

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew53" id="abfrageNew53" value="2"> Falsch

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew53" id="abfrageNew53" value="3">Ich weiss es nicht</label>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="clearfix">

                                <h5 class="pb15">

                                4. Die Aktie eines Unternehmens liefert für gewöhnlich eine sicherere Rendite als ein Aktienfonds?

                            </h5>

                            </div>

                            <div class="col-md-12">

                                <div class="radio-bx pb15">

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew54" id="abfrageNew54" value="1"> Richtig

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew54" id="abfrageNew54" value="2"> Falsch

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew54" id="abfrageNew54" value="3"> Ich weiss es nicht</label>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="clearfix">

                                <h5 class="pb15">

                                5. Wenn der Zins fällt, dann sollte der Preis einer Anleihe ?

                            </h5>

                            </div>

                            <div class="col-md-12">

                                <div class="radio-bx pb15">

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew55" id="abfrageNew55" value="1"> Steigen

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew55" id="abfrageNew55" value="2"> Fallen

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew55" id="abfrageNew55" value="3"> Gleich bleiben

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew55" id="abfrageNew55" value="4"> Keine dieser Aussagen

                                        </label>

                                    </div>

                                    <div class="sing-bxs blk">

                                        <label>

                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrageNew55" id="abfrageNew55" value="5">Ich weiss es nicht</label>

                                    </div>

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

    </body>



    </html>