<?php
    // Stand alone Solar energy system component sizing calculator 
    // it tells you how many panels you need and the estimated battery capacity needed
    // Note all physical quantities are in SI units
    define("P_F",0.8);
   /* $Load = 2000;    // watts
    $maxLoad = $Load*1.5;   // watts
    // Because its a standalone system we need double the Maxload.
    $solarPanel_output = $maxLoad*2;    // This is so the system can supply electricity and at the same time charge the batteries for use at night.
    $panelRating = 200;  // watts
    $no_of_Panels = $solarPanel_output/$panelRating;

    $realPower = $maxLoad;
    $apparentPower = $realPower/P_F;
    echo("Load: ".$Load." W<br>");
    echo("Max Load: ".$maxLoad." W<br>");
    echo("Number of Panels needed: ".$no_of_Panels."<br>");
    echo("Inverter rating: ".$apparentPower." VA<br>");*/

    $load = $_GET['Load'];
    $pRating = $_GET['pRating'];

    function sizingCalculator($Load,$panelRating){
        // does the sizing calculations for every component
        $maxLoad = $Load*1.5;
        $solarPanel_output = $maxLoad*2;
        $no_of_Panels = $solarPanel_output/$panelRating;
        $realPower = $maxLoad;
        $apparentPower = $realPower/P_F;
        echo("Load: ".$Load." W<br>");
        echo("Max Load: ".$maxLoad." W<br>");
        echo("Number of Panels needed: ".$no_of_Panels."<br>");
        echo("Inverter rating: ".$apparentPower." VA<br>");
        return 0;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SASESCSC</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">SASESCSC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.html">Home</a></li>
            <li class="active"><a href="Sizing.html">Sizing calculator</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>SASESCSC</h1>
        <p class="lead">Sizing calculator.</p>
        <p class="lead">Type the estimated load (Measured in watts).</p>
      </div>

      <div class="starter-template">
            <form class="navbar-form starter-template" role="search" action="calc.php" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Load" name="Load">
                    <input type="text" class="form-control" placeholder="Solar Panel rating" name="pRating">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
      </div>
      <?php sizingCalculator($load,$pRating); ?>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


