    </html>
    <?php
    require_once "admin/dbconfig.php";
    function selectionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $min = $i;
            $length = count($array);
            for ($j = $i + 1; $j < $length; $j++) {
                if ($array[$j] > $array[$min]) {
                    $min = $j;
                }
            }
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }
        return $array;
    }

    $results = $db->getOne('state_price');
    $rfree_return = $results['free_return'];
    $market_return = $results['market_return'];
    $market_sd = $results['market_sd'];
    $horizon = $results['horizon'];
    $statePriceStr = $results['state_price_string'];
    $statePriceArray = explode(",", $statePriceStr);
    $statePriceArray = selectionSort($statePriceArray);
    $_SESSION['state_price'] = $statePriceArray;
    $state_price_sum = array_sum($statePriceArray);
    $_SESSION['randomvalue']=rand(100000, 999999);
    $save_outcome =  number_format(((pow((1+$rfree_return),$horizon) * 100) * $state_price_sum), 2);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="icon" href="img/fav-icon.png" type="image/png"/>

        <title>Distribution Builder</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
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
        <!-- Video CSS -->
        <link href="css/drag.css" rel="stylesheet">

        <!--Theme Styles CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
        <link rel="stylesheet" type="text/css" href="vendors/select/selectables.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">


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
                    <!-- Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse" id="small_nav">
                        <ul class="nav navbar-nav">
                            <li class="dropdown main_menu active">
                                <a href="index.html" class="drop_menu">Home</a>
                            </li>
                            <li>
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
                   
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
    <!-- End Header Area -->
    <style type="text/css">
        #outputScreen
        {
            border-top: 5px solid #2c4850;
        }
    </style>
    <section class="section" id="calculateScreen">
        <div class="container">
            <div class="row">
            <div class="col-md-9">

            <div class="result noselect">
                <span class="pb15" id="budget">Budget:</span>
                <div class="updatedValue" style="background-color: green;" >100
                </div>
                <span class="button">
            <button class="btn btn-success btn-lg" onclick="showSection('outputScreen', event)" id="nextBtn">Bestätigen</button>
        </span>
            </div>

            <div class="graph noselect">
                <?php
                for ($i = 1; $i < 21; $i++) {
                    if ($i == 10) {
                        echo '<div class="drop" data-value="' . ($i * 10) . '" ondrop="drop(event)" ondragover="allowDrop(event)">';
                        for ($j = 0; $j < 100; $j++) {
                            echo '<img src="person.svg" data-price="' . $statePriceArray[$j] . '" draggable="true" ondragstart="drag(event)" id="drag' . ($j + 1) . '">';
                        }
                        echo '<span class="xaxis">0</span></div>';
                    } else {
                        echo '<div class="drop" data-value="' . ($i * 10) . '" ondrop="drop(event)" ondragover="allowDrop(event)"><span class="xaxis">' . (($i * 10) - 100) . '</span></div>';
                    }
                } ?>
                <br><p class="text-center noselect">Rendite (in %)</p>
            </div>
        </div>

            <div class="col-md-3 noselect">
                <p>&nbsp;</p>
                <h4 style="font-family:Georgia;font-size:15px"><b>Instruktionen</b></h4>
    			<br>
                <ul style="padding-left: 10px;font-family:Georgia;font-size:15px">
                    <li>Jedes der 100 Personen-Icons repräsentiert einen möglichen Ausgang Ihrer Investitionsentscheidung am Ende des Investitionszeitraums</li>
                    <li>Bitte verteilen Sie die 100 Personen so, dass Sie eine für sich wünschenswerte Verteilung für Ihre Rentenvorsorge erhalten
                    </li>
                    <li>Sie haben ein Budget von 100, welches Sie über die gesamte Spanne (siehe horizontale Achse) verteilen können</li>
                    <li>Sie können nur eine Renditenverteilung bestätigen, welche Ihr Budget ausschöpft (99-100), nicht aber übersteigt (>100)</li>
    				<li>Klicken Sie auf “Bestätigen“, um Ihre aktuelle Investitionsverteilung zu bestätigen und fortzufahren</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
	
	<section class="section" id="outputScreen">
	 <div class="container">
            <div class="col-md-12">
       
        <div class="col-md-12 no-gutter">
                    <h2 class="text-center pb30" style=" word-break: break-all;">Investitionsempfehlung</h2>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="text-center ">
                        Basierend auf der von Ihnen gewählten Renditenverteilung sollten Sie im Rahmen einer Altersvorsorge <span id="outcome"></span>%  Ihrer Ersparnisse in Aktienfonds und <b><span id="savingsAccount"></span></b>%  in ein Sparkonto investieren
                    </p>
                    <hr>
                </div>
     
            <div class="col-md-10 col-md-offset-4">
			   <form>
               <div class="text-center pb30"> <button class="btn btn-primary btn-lg"  onclick="finish(event)">Weiter zu Abschlussfragebogen</button>
                    </div>
             </form>
            </div>
        
		</div>
		</div>
    </section>
	
    <?php include 'footer.php'; ?>

    <div id="lowBudget" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Niedriges Budget!</h4>
                </div>
                <div class="modal-body">
                    <p>Sie haben Ihr Budget nicht voll ausgeschöpft: Sie können eine höhere Rendite für das eingegangene Risiko erzielen oder Ihr Risiko für die aktuelle Durchschnittsrendite senken.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>


    <div id="highBudget" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hohes Budget!</h4>
                </div>
                <div class="modal-body">
                    <p>Sie haben Ihr Budget überschritten: Sie müssen Ihre durchschnittliche Rendite für das eingegangene Risiko senken oder Sie müssen Ihr Risiko für den aktuellen Durchschnitt erhöhen.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>

        </div>
    </div>

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.8.17/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Isotope -->
    <!-- <script src="vendors/isotop/isotope-docs.min.js"></script> -->
    <!-- Pop Up -->
    <!-- <script src="vendors/popup/lightbox.min.js"></script> -->
    <!-- Owlcarousel JS -->
    <!-- <script src="vendors/owl_carousel/owl.carousel.min.js"></script> -->
    <!-- Counterup JS -->
    <script src="vendors/counter/waypoints.min.js"></script>
    <script src="vendors/counter/jquery.counterup.min.js"></script>
    <script src="js/jquery.nu-selectable.js"></script>
    <script src="vendors/select/selectables.js"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validationEngine.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
    <script>
	var move_made = 0;
        function updateAverage() {
            var sum = 0;
            var count;
            var i = 0;
            $('.drop').each(function (index, element) {
                count = 0;
                var xAxisValue = $(this).attr('data-value');
                var person = $(this).children("img");
                $(person).each(function (index, element) {
					console.log(statePriceArray[i]);
                    count = count + Number(statePriceArray[i]);
                    i++;
                });
                console.log("length:" + person.length);
                sum = sum + (count * xAxisValue);
				console.log("sum:"+ sum + "xAxisValue: "+ xAxisValue);
            });
            var update;
            update = Math.round(sum * 100) / 100;
            $('.updatedValue').text(update);
            var state_price_sum = <?php echo $save_outcome; ?>;
            var state_price_low = 99; //state_price_sum - (state_price_sum /100);
            var state_price_high = 100; //state_price_sum + (state_price_sum /100);
            if (update >= state_price_low && update <= state_price_high) {
                $('.updatedValue').css('background', "#383");
            }
            else if(update < state_price_low) {
                $('.updatedValue').css('background', "#22f57f");
            }
            else {
                $('.updatedValue').css('background', "#ff0000");
            }
        }
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.stopPropagation();
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
			move_made++;
            var data = ev.dataTransfer.getData("text");
            var selectedImage = $('.drop img.selected');
            var target;
            if ($(ev.target).hasClass('drop')) {
                target = ev.target;
            }
            else {
                target = $(ev.target).parent();
            }
            if (selectedImage.length > 0) {
                $(selectedImage).each(function (element, index) {
                    $(target).append(this);
                });
            }
            else {
                $(target).append(document.getElementById(data));
            }
            $(selectedImage).removeClass('selected');
            $('.drop').each(function(index, element) {
                $(this).css('width', setWidth($(this).children("img").length));
            });
            updateAverage();
        }
        function setWidth(num) {
            if(num > 90) {
                return '135px';
            }
            else if(num > 75) {
                return '115px'
            }
            else if(num > 60) {
                return '100px';
            }
            else if(num > 45) {
                return '80px';
            }
            else if(num > 30) {
                return '65px';
            }
            else if(num > 15) {
                return '47px';
            }
            else {
                return '25px';
            }
        }
        function calculateMeanSD(inputArray) {
            var meanSum = 0, mean, sd, variance, variance_sum;
            var i;
            for (i = 0; i < inputArray.length; i++) {
                meanSum = meanSum + inputArray[i].count * inputArray[i].xAxisValue;
            }
            mean = meanSum / 100;
            variance_sum = 0;
            for (i = 0; i < inputArray.length; i++) {
                variance = Math.pow(inputArray[i].xAxisValue - mean, 2) * inputArray[i].count;
                variance_sum = variance_sum + variance;
            }
            sd = Math.sqrt(variance_sum / 99);
            return [mean, sd];
        }

        function showSection(sectionName, e, formID) {
            e.preventDefault();
            if(formID) {
                if(!$('#'+formID).validationEngine('validate'))
                {
                    return false;
                }
            }
            if (sectionName == 'outputScreen') {
                var budgetVal = $('.updatedValue').text();
				if(move_made<1){
				//$('#lowBudget').modal();
			}
               else if(budgetVal < 99) {
                    $('#lowBudget').modal();
                }
                else if(budgetVal > 100) {
                    $('#highBudget').modal();
                }
                else {
                    $('#budget').text($('.updatedValue').text());
                    var distribution = [];
                    $('.drop').each(function (index, element) {
                        count = 0;
                        tempArray = {};
                        var xAxisValue = $(this).attr('data-value');
                        var person = $(this).children("img");
                        if (person.length > 0) {
                            tempArray.xAxisValue = xAxisValue;
                            tempArray.count = person.length;
                            distribution.push(tempArray);
                        }
                    });
                    console.log(distribution);
                    var meanSd = calculateMeanSD(distribution);
                    console.log("Mean/SD: " + meanSd);
                    var mean = meanSd[0];
                    var sd = meanSd[1];
                    $.ajax({
                        url: 'optimise.php',
                        type: 'POST',
                        data: {'mean': mean, 'sd': sd},
                        success: function (data) {
                            $('#outcome').text(data);
                            $('#savingsAccount').text(100 - data);
                        }
                    });
                    endedDate = new Date();
                    $('section').hide();
                    $('section').removeClass('active');
                    $('#' + sectionName).show();
                    $('#' + sectionName).addClass('active');
                }
            }
            else {
                if(sectionName.indexOf('feedbackScreen') >= 0) {
                    $("#main_nav").removeClass('hide-menu');
                }
                pageNo = sectionName.split("feedbackScreen");
                currentSection = $('section.active').attr('id');
                if(currentSection.indexOf('feedbackScreen') >= 0) {
                    currentPageNo = currentSection.split("feedbackScreen");
                    if((pageNo[1]-currentPageNo[1]) == 1) {
                        $('section').hide();
                        $('section').removeClass('active');
                        $('#' + sectionName).show();
                        $('#' + sectionName).addClass('active');
                        $('.custom-menu ul li').removeClass('active');
                        $('.' + sectionName).addClass('active');
                    }
                }
                else {            
                    $('section').hide();
                    $('section').removeClass('active');
                    $('#' + sectionName).show();
                    $('#' + sectionName).addClass('active');
                }
            }
        }

        function diff_minutes(dt2, dt1) {
            var diff = (dt2.getTime() - dt1.getTime()) / 1000;
            //diff /= 60;
            return Math.abs(Math.round(diff));
        }
        function finish(ev) {
            ev.preventDefault();
            var submittedData = {};
			submittedData.budget = $('#budget').text();
			submittedData.timeTaken = diff_minutes(endedDate, startedDate);
    		//submittedData.randomvalue=<?php echo $_SESSION['randomvalue']; ?>;
			submittedData.optimised_value = $('#outcome').text();
			var js_array = [<?php echo '"'.implode('","', $_SESSION['state_price']).'"' ?>];
			submittedData.statepriceArray=js_array;
            var tempArray;
            var distribution = [];
            $('.drop').each(function (index, element) {
                count = 0;
                tempArray = {};
                var xAxisValue = $(this).attr('data-value');
                var person = $(this).children("img");
                if (person.length > 0) {
                    tempArray.xAxisValue = xAxisValue;
                    tempArray.count = person.length;
                    distribution.push(tempArray);
                }
            });
            submittedData.distribution = distribution;
            $.ajax({
                url: "distribution-builder_proc.php",
                type: 'POST',
                data: {'data': submittedData},
                success: function (data) {
    		    //alert(data);
                    window.location.href = "abschlussfragebogen-1.php";
                }
            });
        }
        $(document).ready(function () {
            var statePriceString = '<?php echo $statePriceStr; ?>' ;
            statePriceArray = statePriceString.split(",");
            startedDate = new Date();
            jQuery('.drop img').click(function () {
                $(this).toggleClass('selected');
            });
            var selectable = new Selectables({
                elements: '.drop img',
                selectedClass: 'selected',
                zone: '.graph'
            });

            $('.drop img').on('mousedown', function(ev) {
                ev.stopPropagation();
            });
            //$("#feedbackForm1").validationEngine();
            //$("#feedbackForm2").validationEngine();
            //$("#feedbackForm3").validationEngine();
			//$("#feedbackForm4").validationEngine();
			//$("#feedbackForm5").validationEngine();

            // tochu punch by mike
        function touchHandler(event) {
    var touch = event.changedTouches[0];
    

    var simulatedEvent = document.createEvent("MouseEvent");
    alert ('sfdsfa');

        simulatedEvent.initMouseEvent({
        touchstart: "mousedown",
        touchmove: "mousemove",
        touchend: "mouseup"
    }[event.type], true, true, window, 1,
        touch.screenX, touch.screenY,
        touch.clientX, touch.clientY, false,
        false, false, false, 0, null);

    touch.target.dispatchEvent(simulatedEvent);
    event.preventDefault();
}

function init() {
    document.addEventListener("touchstart", touchHandler, true);
    document.addEventListener("touchmove", touchHandler, true);
    document.addEventListener("touchend", touchHandler, true);
    document.addEventListener("touchcancel", touchHandler, true);
}


        });


     
        
    </script>
      <script>
            history.pushState({ warnOnBack: true }, document.title, "");

            window.onpopstate = function(e){
                if( confirm("Achtung. Hiermit werden Ihre Daten nicht weiter gespeichert und die Studie wird beendet") ) {
                    location.href = "prematureStudyAbortion.html"
                } else {
                    history.pushState({ warnOnBack: true }, document.title, "");
                }
            };
        </script>
       <!-- <script>
  $( function() {
    $( ".graph" ).draggable();
  } );
  </script>
 -->
    </body>
    </html> 