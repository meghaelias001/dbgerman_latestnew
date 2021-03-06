<?php
    session_start();
     if(!isset($_SESSION['ab2']))
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
        <title>Abschlussfragebogen II (von IV)</title>
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
         <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="logo_part">
                                <a class="logo">
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
                                    <li class="main_menu">
                                        <a href="abschlussfragebogen-2.php" class="dropdown-toggle drop_menu">Fragen II</a>
                                    </li>
                                    <li class="main_menu active">
                                        <a href="abschlussfragebogen-3.php" class="dropdown-toggle drop_menu">Fragen III</a>
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
                        <h2 class="text-center pb30">Abschlussfragebogen III (von IX)</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center ">
                            Bitte geben Sie an, welche der beiden untenstehenden Lotterien Sie hypothetisch spielen würden, wenn es sich um echtes Geld handelte. Die linke Lotterie zahlt eine sichere Geldsumme von 10 Euro aus. Die rechte Lotterie variiert in den Wahrscheinlichkeiten, mit denen Sie 20 Euro beziehungsweise 4 Euro gewinnen können.
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="submitform" action="abfrage3_proc.php" method="POST">
                         
                            <style type="text/css">
                            .frg-table table {
                                border: 1px solid;
                                border-spacing: 0;
                                border-bottom: transparent;
                                display: none;
                            }

                            .frg-table table tr {
                                border: 2px solid
                            }

                            .frg-table table tr td {
                                width: 50%;
                                border: 1px solid;
                                padding: 15px;
                                border-left: transparent;
                                border-right: transparent;
                            }

                            .formError .formErrorContent {
                                bottom: 0px !important;
                                min-width: 225px;
                            }
                            .tbl-bx
                            {
                                border: 1px solid;
                                margin: 10px 0;
                                padding: 15px 0;
                            }
                            .tbl-bx:first-child
                            {
                                
                                margin-bottom: 0px;
                            }
                            </style>
                            <div class="col-md-12">
                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <h4>Lottery A</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Lottery B</h4>
                                    </div>
                                </div>
                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow1"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" id="lotteryARow1">&nbsp;10 mit 100%
                                                </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" name="lotteryRow1" id="lotteryBRow1">&nbsp;20 mit 70% oder 4 mit 30%</label>
                                    </div>
                                </div>

                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow2" id="lotteryARow2" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage" >&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow2" id="lotteryBRow2" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 64% oder 4 mit 36%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow3" id="lotteryARow3"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%
                                                </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow3" id="lotteryBRow3" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 58% oder 4 mit 42%
                                                </label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow4" id="lotteryARow4" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow4" id="lotteryBRow4" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 54% oder 4 mit 46%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow5" id="lotteryARow5" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%
                                                </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow5" id="lotteryBRow5" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 51% oder 4 mit 49%
                                                </label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow6" id="lotteryARow6"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow6" id="lotteryBRow6"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 49% oder 4 mit 51%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow7" id="lotteryARow7" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow7" id="lotteryBRow7"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 46% oder 4 mit 54%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow8" id="lotteryARow8" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow8" id="lotteryBRow8" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 42% oder 4 mit 58%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow9" id="lotteryARow9"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow9" id="lotteryBRow9" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 36% oder 4 mit 64%</label>
                                    </div>
                                </div>

                                                                <div class="row tbl-bx">
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="0" type="radio" name="lotteryRow10" id="lotteryARow10"  data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;10 mit 100%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                                    <input value="1" type="radio" name="lotteryRow10" id="lotteryBRow10" data-validation-engine="validate[required]" data-errormessage-value-missing="Bitte beantworten Sie diese Frage">&nbsp;20 mit 30% oder 4 mit 70%</label>
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
        </section>
        <?php include 'footer.php';?>`
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