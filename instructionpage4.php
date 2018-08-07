     <?php
    session_start();
	$_SESSION['ins3'] = 1;
    ?>
	<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
        <!-- Favicon -->
        <link rel="icon" href="img/fav-icon.png" type="image/png">
        
        <title>Kontrollfragen</title>
        
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
    	<script>
        var trycount = 1; 
    	function checkf() {
			//alert(trycount);
    	var flag0 = false;
    	var flag1 = false;
    	var flag2 = false;
    	var flag3 = false;
    	var fragen1 = document.getElementById("kontrolfrage1");
    	var ch1 = document.getElementById("ch1");
    	var ch2 = document.getElementById("ch2");
    	var ch3 = document.getElementById("ch3");
    	if(fragen1.value=="-20")
    	{
    		flag0 = true;	
        }
		if(!ch1.checked && ch2.checked && !ch3.checked)
    	{
    		flag2=true;
    	}
		if(trycount<2)
		{   if(flag0 && flag2)
			{
				window.location.href = "distribution-builder.php";
			}
			else if(flag0 && !flag2) 
			{
				$('#error1').modal();
			}
			else if(!flag0 && flag2)
			{
				$('#error2').modal();
			}
			else 
			{
				$('#error3').modal();
			}
		}
		else if(trycount==2)
		{
			if(flag0 && flag2)
			{
				window.location.href = "distribution-builder.php";
			}
			
			else if(flag0 && !flag2) 
			{
				$('#error6').modal();
			}
			else if(!flag0 && flag2)
			{
				$('#error7').modal();
			}
			else 
			{
				$('#error8').modal();
			}
		}
		else 
		{  
			if(flag0 && flag2)
			{
				window.location.href = "distribution-builder.php";
			}
			else 
			{
			$('#error9').modal();
			setTimeout(function(){ window.location.href = "prematureStudyAbortion.html"; }, 1000);
    		
			}
		}
		trycount++;
	}
    </script>
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
                            <li class="dropdown">
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
                       <li class="dropdown main_menu">
                            <a href="instructionpage1.php" class="dropdown-toggle drop_menu">Instruktionen I</a>
                        </li>
						<li class="dropdown main_menu">
                            <a href="instructionpage2.php" class="dropdown-toggle drop_menu">Instruktionen II</a>
                        </li>
						<li class="dropdown main_menu ">
                            <a href="instructionpage3.php" class="dropdown-toggle drop_menu">Instruktionen III</a>
                        </li>
						<li class="main_menu active">
                            <a href="instructionpage4.php" class="dropdown-toggle drop_menu">Kontrollfragen</a>
                        </li>
                    </ul>
                </div>
                </div>
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

    <section class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 no-gutter">
                        <h2 class="text-center pb30">Kontrollfragen</h2>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center ">
                    Wir möchten nun sicherstellen, dass Sie die Aufgabe des DistributionBuilder ausreichend verstanden haben, indem wir Ihnen zwei Fragen stellen. Um fortzufahren und den DistributionBuilder anzuwenden, müssen Sie beide Fragen richtig beantworten. Im Falle von insgesamt drei falschen Antworten wird das Experiment an dieser Stelle abgebrochen und ist beendet
                </p>
                        <hr>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="clearfix">
                        <h5 class="pb15">
                            1) Was ist die geringste Rendite, die Sie mit Ihrer Investition im Bild unten erhalten können?
                        </h5>
                        </div>
                        <div class="row">
                        <div class="col-md-8">
                        <div class="image-wrap">
                            <img class="img-responsive" src="instruction5.svg">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12" >
                            <div class="pb30">
                            <strong>Antwort:</strong>
           <select id="kontrolfrage1" name="kontrolfrage1" >
           <option>Bitte auswählen</option>
           <?php
                        for($i=-90; $i<=100; $i+=10) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }

                ?>    
           </select>
           &nbsp;<strong>%</strong>
       </div>
        </div>
    </div>
    </div>

                    
                    
                <div class="col-md-12">
                    <div class="clearfix">
                        <h5 class="pb15">
                            2) Ist es möglich, diese Verteilung umzusetzen?
                        </h5>
                        </div>
                        <div class="row">
                        <div class="col-md-8">
                        <div class="image-wrap">
                            <img class="img-responsive" src="instruction6.svg">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12" >
                            <div class="pb15s">
                            
              <div class="form-row" align="left">
                            <label> <input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Please select your answer!" name="kontrolfrage2" id="ch1" value="Ja">
                            Ja</label>
                        </div>
                        <div class="form-row" align="left">
                            <label><input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Please select your answer!"  id="ch2" name="kontrolfrage2" value="Nein,denn durchschnittliche hohe Renditen gehen mit höherem Risiko einher">
                       Nein, das Budget ist überschritten, denn höhere Renditen gehen mit höheren Risiken einher.  

                        </label>
                        </div>
                        <div class="form-row" align="left" >
                                <label><input type="radio" data-validation-engine="validate[required]"
                                   data-errormessage-value-missing="Please select your answer!" name="kontrolfrage2" id="ch3" value="Nein,die höchstmöglichen Renditen sind begrenzt auf +30%" >
                        Nein, die höchstmöglichen Renditen sind begrenzt auf +20%</label>
                        </div>
                        <span id="kontrollabel" for="kontrolfrage1"></span>
                        <span id="frage2label" for="kontrolfrage1"></span>
                        <span id="mainlabel" for="kontrolfrage1"></span>
       </div>
        </div>
                

                    
                    
                </div>
            </div>

            <div class="col-md-12">
                <hr>
                <button class="btn btn-primary btn-lg btn-block " onclick="checkf()">
                            Abschicken und mit Experiment beginnen
                        </button>
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
		
		 <div id="error1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
                    <p>Ihre Antwort zu Frage 2 ist leider nicht richtig.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>

	 <div id="error2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler</h4>
                </div>
                <div class="modal-body">
                    <p>Ihre Antwort zu Frage 1 ist leider nicht richtig. Bei Verständnisfragen lesen Sie sich bitte erneut „Instruktionen II und Instruktionen III durch</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>

	  <div id="error9" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
                    <p>Leider haben Sie zum dritten Mal eine falsche Antwort eingereicht. Daher endet das Experiment an dieser Stelle; Sie dürfen das Fenster nun schliessen.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>
	 <div id="error3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
				<p>Ihre Antwort zu Frage 1 ist leider nicht richtig. Bitte geben Sie die korrekte Prozentzahl für die geringste Rendite an, die Sie aus obiger Verteilung erhalten könnten.";
    	          </p>
                    <p>Ihre Antwort zu Frage 2 ist leider nicht richtig. Bei Verständnisfragen lesen Sie sich bitte erneut „Instruktionen II und Instruktionen III durch.";
                    </p>
					
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>
 <div id="error6" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
			<p>	Ihre Antwort zu Frage 2 ist leider nicht richtig. Bei Verständnisfragen lesen Sie sich bitte erneut „Instruktionen II und Instruktionen III durch.";
                  </p>  
                    <p>Ihre Antwort ist leider nicht richtig. Bitte beachten Sie, dass das Experiment im Falle einer weiteren falschen Antwort aus Testungsgründen an dieser Stelle abgebrochen werden muss.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>

	<div id="error7" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
				<p>Ihre Antwort zu Frage 1 ist leider nicht richtig. Bitte geben Sie die korrekte Prozentzahl für die geringste Rendite an, die Sie aus obiger Verteilung erhalten könnten. Bei Verständnisfragen lesen Sie sich bitte erneut ,Instruktionen II und Instruktionen III durch";
    	          </p>
                     <p>Ihre Antwort ist leider nicht richtig. Bitte beachten Sie, dass das Experiment im Falle einer weiteren falschen Antwort aus Testungsgründen an dieser Stelle abgebrochen werden muss.</p>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>
	
	<div id="error8" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Fehler!</h4>
                </div>
                <div class="modal-body">
                   <p>Ihre Antwort zu Frage 1 ist leider nicht richtig. Bitte geben Sie die korrekte Prozentzahl für die geringste Rendite an, die Sie aus obiger Verteilung erhalten könnten.";
    	          </p>
				  <p>Ihre Antwort zu Frage 2 ist leider nicht richtig. Bei Verständnisfragen lesen Sie sich bitte erneut „Instruktionen II und Instruktionen III durch.";
                  </p>  
                     <p>Ihre Antwort ist leider nicht richtig. Bitte beachten Sie, dass das Experiment im Falle einer weiteren falschen Antwort aus Testungsgründen an dieser Stelle abgebrochen werden muss.</p>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>
    </body>
    </html> 