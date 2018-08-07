     <?php
    session_start();
	$_SESSION['def'] = 1;
    ?>
	<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="icon" href="img/fav-icon.png" type="image/png">
        <title>Instruktionen I</title>
        <style>
        div.imagecontainer {
            display: inline-block;
        }
        </style>
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
                                <div class="uni-logo-holder">
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
                            <li class="dropdown main_menu">
                                <a href="index.html" class="drop_menu">Home</a>
                            </li>
                            <li class="main_menu active">
                                <a href="einverst.html">Einverständnis</a>
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
                            <a href="definitions.php" class="dropdown-toggle drop_menu">Definitionen</a>
                        </li>
                       <li class="main_menu active">
                            <a href="instructionpage1.php" class="dropdown-toggle drop_menu">Instruktionen I</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="instructionpage2.php" class="dropdown-toggle drop_menu">Instruktionen II</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="<?php if(isset($_SESSION['ins2'])) echo "instructionpage3.php"; else echo '#';?>" class="dropdown-toggle drop_menu">Instruktionen III</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="<?php if(isset($_SESSION['ins3'])) echo "instructionpage4.php"; else echo '#';?>" class="dropdown-toggle drop_menu">Kontrollfragen</a>
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
        <!-- Page Header
        <section class="row page_header">
            <div class="container">
                <h2>About Us</h2>
            </div>
        </section>
        <!-- End Page Header -->
        <!-- About Us Area -->

        <section class="section">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
            <div class="col-md-12 no-gutter">
                <h2 class="text-center pb30">Instruktionen I</h2>
            </div>
            <div class="col-md-12 no-gutter">
                <p class="text-justify">
                            Bitte lesen Sie die folgenden Instruktionen aufmerksam, da Ihnen abschliessend Kontrollfragen gestellt werden und Sie nicht mehr zurücknavigieren können sobald Sie die Anwendung „DistributionBuilder“ erreicht haben.</p>
                            <p class="text-justify"> Im DistributionBuilder werden sie die Möglichkeit haben, Ihre eigene Renditenverteilung für die Auszahlung nach 10 Jahren nach Ihrer Investition zu kreieren. Dabei sind höhere Renditen (d.h. positive Erträge) besser als geringere Renditen. Allerdings gehen durchschnittlich höhere Renditen auch einher mit einem höheren Risiko. Daher müssen Sie abwägen, wie Sie Rendite und Risiko in Ihrer präferierten Renditenverteilung gewichten. Aus Gründen der Einfachheit sollen bei unserem DistributionBuilder mögliche Renditenverteilungen unter Berücksichtigung von zwei Anlagenklassen gebildet werden: Ersparnisse auf einem Sparkonto und Aktienmarktfonds. Basierend auf Ihrer selbst erstellten präferierten Renditenverteiltung werden Sie daraufhin eine Empfehlung erhalten, welchen Anteil Ihres Finanzkapitals Sie in Ihr Sparkonto und welchen Anteil Sie in den Aktienmarkt investieren sollten. Anbei finden Sie eine exemplarische Darstellung des DistributionBuilder:
                </p>

                <hr>
            </div>
        </div>

 
                    <div class="col-md-8 col-md-offset-2">
                            <div class="image-wrap">
                                <img class="img-responsive" src="Instruction_1.svg" />
	                     </div>
                    </div>
                    <div class="col-md-12">


                        <p class="text-justify">
    Jedes Personen-Icon repräsentiert eine mögliche Rendite (d.h. Ertrag) Ihrer ausgewählten Investitionsentscheidung nach 10 Jahren.</p>
                            <p class="text-justify"> Auf der horizontalen Achse ist die Rendite Ihrer Investition von -90%, d.h. Sie haben 90% Ihres investierten Kapitals verloren, bis +100%, d.h. Sie haben ihr investiertes Kapital verdoppelt, abgebildet. +-0% bedeutet, dass Ihr Kapital nach 10 Jahren immer noch die gleiche Geldmenge beträgt. Zu Beginn sind alle Personen-Icons bei +-0% platziert. Das bedeutet, dass Ihr Kapital mit Sicherheit nach 10 Jahren gleich gross ist. In diesem Fall wäre kein Risiko in der Verteilung enthalten, da alle Personen-Icons auf demselben Punkt platziert sind.</p>
                            <p class="text-justify"> Das Budget in der obigen Box zeigt Ihnen den derzeitigen Wert der von Ihnen gewählten Verteilung an. Sie haben ein Budget von 100 und können dieses Budget nicht überschreiten. In obigem Fall ist das Budget genau ausgeschöpft, was bedeutet, dass die derzeitige Verteilung für Sie in die Praxis umsetzbar wäre.</p>
                            <p class="text-justify">Ein Beispiel, was den Verteilungsprozess wie oben beschrieben illustriert, ist detailliert in “Instruktionen II“ und “Instruktionen III“ beschrieben.</p>
                        </div>
<div class="col-md-12">
    <hr>
 <a class="btn btn-primary btn-lg btn-block"  href="instructionpage2.php">Weiter</a> 

</div>
 
                    </div>
                    </div>
        </section>
        <!-- End About Us Area -->
        <?php include 'footer.php'; ?>
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
    </body>
</html>