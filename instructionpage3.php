 <?php
    session_start();
	$_SESSION['ins2'] = 1;
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="img/fav-icon.png" type="image/png">
    <title>Instructions</title>
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
            <!-- /.container-fluid -->
        </nav>
        <!-- Big Menu -->
        <nav class="navbar navbar-default navbar-static-top big_menu" id="main_navbar">
            <div class="container">
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
                       <li class="dropdown main_menu">
                            <a href="instructionpage1.php" class="dropdown-toggle drop_menu">Instruktionen I</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="instructionpage2.php" class="dropdown-toggle drop_menu">Instruktionen II</a>
                        </li>
						<li class="main_menu active">
                            <a href="instructionpage3.php" class="dropdown-toggle drop_menu">Instruktionen III</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="instructionpage4.php" class="dropdown-toggle drop_menu">Kontrollfragen</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
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
                        <h2 class="text-center pb30">Instruktionen III</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <!-- <p class="text-center ">
                    Um Ihnen eine Empfehlung zur Verteilung Ihrer Finanzanlagen geben zu können, benötigen wir einige Angaben. Bitte beantworten Sie die folgenden sechs Fragen auf den Seiten 'Fragebogen I' bis 'Fragebogen VI'.
                </p> -->
                        <hr>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="image-wrap">
                        <img class="img-responsive" src="Instruction4.svg"></div>
                   
                </div>
                 <div class="col-md-12">
                        <ul class="instruction-list ">
                        <li> Wenn Sie eine 30%ige Rendite mit 50%iger Wahrscheinlichkeit erreichen wollen, müssen Sie die Personen-Icons auch so verteilen, dass mit den Icons die Möglichkeit besteht, Teile Ihres investierten Kapitals zur verlieren.</li>
                        <li> In unserem Beispiel ist es möglich, mit einer Wahrscheinlichkeit von 50% eine Rendite von 30% zu erzielen, wenn in 9% der Fälle die Rendite Ihrer Investition gleichzeitig -10% beträgt (und in 41% der Fälle weiterhin 0%)</li>
                        </ul>
                        
                    </div>
                    <div class="col-md-12">

                    <hr> <a class="btn btn-primary btn-lg btn-block "  href="instructionpage4.php ">Weiter</a> </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
    <?php include 'footer.php'; ?>
    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js "></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js "></script>
    <!-- Pop Up -->
    <script src="vendors/popup/lightbox.min.js "></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js "></script>
    <!-- Isotope -->
    <script src="vendors/isotop/isotope-docs.min.js "></script>
    <!-- Counterup JS -->
    <script src="vendors/counter/waypoints.min.js "></script>
    <script src="vendors/counter/jquery.counterup.min.js "></script>
    <!-- Theme JS -->
    <script src="js/theme.js "></script>
</body>

</html>