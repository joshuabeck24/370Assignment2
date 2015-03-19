<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.js"></script>
		<!-- Link to our own JavaScript file-->
		<script src="../js/script.js"></script>
		<script src="../js/jquery-2.1.1.min.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js"></script>
		<title>AudioNexus - Admin Login</title>
		<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
		<link href="../css/styles.css" rel="stylesheet"/>
		<link href="../css/bootstrap.css" rel="stylesheet"/>
		<script>
                    function initialize() {
                      var mapCanvas = document.getElementById('map-canvas');
                      var mapOptions = {
                        center: new google.maps.LatLng(39.7643389, -104.8551114),
                        zoom: 8,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      };
                      var map = new google.maps.Map(mapCanvas, mapOptions);
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
               </script>
               <style type="text/css">
		.indent1 {padding-left: 50px;}
		.indent2 {padding-left: 100px;}
	       </style>
	</head>
	
        <body class="mainBody"> <!-- cz-shortcut-listen="true" --> 
		<header id="mainHeader">
                    <?php
                        include '../view/navinclude.html';
                    ?>
		</header>
		<!-- <br>
		
		<section>  BEGINNING OF SECTION CLOSER IN FOOTER PHP -->

