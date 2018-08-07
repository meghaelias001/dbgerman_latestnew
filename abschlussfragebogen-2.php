<?php
session_start();
$submitted_data= $_SESSION['submitted_data'];
$optimised=  $submitted_data['optimised_value'];
 if(!isset($_SESSION['ab1']))
{
    header('location:index.html');
    exit();
} 
?>
    <!DOCTYPE html>
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
                                        <a href="abschlussfragebogen-1.php" class="dropdown-toggle drop_menu">Fragen I</a>
                                    </li>
                                    <li class="main_menu active">
                                        <a href="abschlussfragebogen-2.php" class="dropdown-toggle drop_menu">Fragen II</a>
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
            </div>
            </div>
            </div>
        </header>
        <!-- End Header Area -->
        <section class="section" id="feedbackScreen">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-12 no-gutter">
                        <h2 class="text-center pb30">Abschlussfragebogen II (von IX)</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center ">
                            Ihre Investititionsempfehlung: Investieren Sie
                            <?php echo $optimised; ?> % Ihrer Ersparnisse in Aktienfonds und
                            <?php echo (100-$optimised);?> % in ein Sparkonto.
                            <br> Bitte beantworten Sie die folgenden Fragen zu Ihrer Investitionsempfehlung und Ihrem eigenen Investitionsverhalten.
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="submitform" action="abfrage2_proc.php" method="POST">
					<div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">1. Besitzen Sie ein Portfolio für Ihre Altersvorsorge?</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs sml">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage21" id="abfrage21" value="1"> Ja
                                        </label>
                                    </div>
                                    <div class="sing-bxs sml">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage21" id="abfrage21" value="2"> Nein
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">2. Was ist Ihr eigener Anteil von Aktienmarktinvestment an Ihrer Altersvorsorge?</h5>
                                <span id="abfrage1label" for="abfrage1"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs">
                                        <input type="number" class="col-lg-1" size="5" name="abfrage1" id="abfrage1" data-validation-engine="validate[required], min[0], max[100]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage"> &nbsp;&nbsp;&nbsp;<b>%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">3. Was ist Ihr eigener Anteil von risikofreien Anlagen an Ihrer Altersvorsorge?</h5>
                                <span id="abfrage2label" for="abfrage2"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs">
                                        <input type="number" class="col-lg-1" size="5" name="abfrage2" id="abfrage2" data-validation-engine="validate[required], min[0], max[100]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"> &nbsp;&nbsp;&nbsp;<b>%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">4. Halten Sie weitere Vermögenswerte im Rahmen Ihrer Altersvorsorge?</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs sml">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage3" id="abfrage3Yes" value="1"> Ja
                                        </label>
                                    </div>
                                    <div class="sing-bxs sml">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage" name="abfrage3" id="abfrage3No" value="2"> Nein
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">5. Wenn ja, welche Art der Vermögenswerte sind dies und wie viel Prozent Ihres Kapitals investieren Sie schätzungsweise in diese?</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs">
                                        <input type="text" name="abfrage4" id="abfrage4" size="35" data-validation-engine="validate[condRequired[abfrage3Yes]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="clearfix">
                                <h5 class="pb15">6. Bezugnehmend auf Ihre Investitionsempfehlung,planen Sie das Portfolio für Ihre Altersvorsorge in den nächsten sechs Monaten zu verändern?</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-bx pb15">
                                    <div class="sing-bxs blk">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage5" id="abfrage5" value="1"> Ja, ich möchte diese der Empfehlung entsprechend ändern beziehungsweise ein Portfolio der Investitionsempfehlung entsprechend eröffnen</label>
                                    </div>
                                    <div class="sing-bxs blk">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage5" id="abfrage5" value="2"> Ja, ich möchte meine Zuordnung ändern, aber nicht der Empfehlung entsprechend</label>
                                    </div>
                                    <div class="sing-bxs blk">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage5" id="abfrage5" value="3"> Nein, ich möchte meine Zuordnung nicht ändern: Meine aktuelle Zuordnung entspricht der vorgeschlagenen Empfehlung</label>
                                    </div>
                                    <div class="sing-bxs blk">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage5" id="abfrage5" value="4"> Nein, ich möchte meine Zuordnung nicht ändern, obwohl meine derzeitige Zuordnung nicht der Empfehlung entspricht</label>
                                    </div>
									<div class="sing-bxs blk">
                                        <label>
                                            <input type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte antworten Sie diese Frage"  name="abfrage5" id="abfrage5" value="5"> Nein, ich besitze kein Portfolio und plane auch nicht, eines zu eröffnen</label>
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