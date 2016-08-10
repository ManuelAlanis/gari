<?php
$xml=simplexml_load_file("http://apps.cbp.gov/bwt/bwt.xml");
$var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro1= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro2= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro3= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->pedestrian_lanes->standard_lanes->delay_minutes;
  if ($var=="250401")
            {
            $esperaysidro4= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay1= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay2= $tiempo;
            } $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay3= $tiempo;
            }   $i++;
}
// $var = (string) $xml->port[7]->port_number;
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->pedestrian_lanes->standard_lanes->delay_minutes;
  if ($var=="250601")
            {
            $esperaOtay4= $tiempo;
            }  $i++;
}

//tecate
 // 250501
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->standard_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate1= $tiempo;
            } $i++;
}

//SENTRI TECATE
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate2= $tiempo;
            } $i++;
}
//READY LINE TECATE
$i = 0;
while ($i < 80) {
  $var =(string) $xml->port[$i]->port_number;
  $garita =(string) $xml->port[$i]->border;
  $portname =(string) $xml->port[$i]->port_name;
  $tiempo = $xml->port[$i]->passenger_vehicle_lanes->ready_lanes->delay_minutes;
  if ($var=="250501")
            {
            $esperaTecate3= $tiempo;
            }   $i++;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="favicon.ico"> -->

    <title>Garitas</title>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
	<script src="garitas.js"></script>
	<script>
    function alertas () {
    var varysidro0 = "<?php echo $esperaysidro1; ?>";
    var varysidro1 = "<?php echo $esperaysidro2; ?>";
    var varysidro2 = "<?php echo $esperaysidro3; ?>";
    var varotay0 = "<?php echo $esperaOtay1; ?>";
    var varotay1 = "<?php echo $esperaOtay2; ?>";
    var varotay2 = "<?php echo $esperaOtay3; ?>";
    var vartecate0 = "<?php echo $esperaTecate1; ?>";
    var vartecate1 = "<?php echo $esperaTecate2; ?>";
    var vartecate2 = "<?php echo $esperaTecate3; ?>";
    innerTimes(varysidro0,varysidro1,varysidro2,varotay0,varotay1,varotay2,vartecate0,vartecate1,vartecate2);
    }
    </script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  	<style>
	/*header logo*/
	#fondo-header{
		position: relative;
		right: 15px;
		height: 120px;
		width: 380px;
 	 	background-image:
    	linear-gradient(
      	#03C6DC				, #1C96F0
    	);
		/*background-color: #0EB4E8;*/
	}
	#logo-header{
		position: relative;
		width: 380px;
		height: 70px;
		background-color: red;
	}
	#menu-header{
		position: relative;
		left: 15px;
		width: 350px;
		height: 50px;
		background-color: green;
		margin-bottom: 10px;
	}


	.table{
		color: white;
	}
	.titulobox{
		background-color: black;
		padding-top: 0px;
		padding-left: 25px;
		font-size: 1.4em;
	}
	.timer{
		background-color: black;
		position: relative;
		padding-top: 20px;
		padding-left: 50px;
		font-size: 2.5em;
	}
	.espera{
		padding-left: 25px;
		font-size: 1em;		
	}
	#titulo{
		/*text-align: center;*/
		position: relative;
		position: center;
		padding-left: 70px;
	}
  	</style>
  </head>
  <body onload="alertas();">
    <!-- Begin page content -->
    <div class="container" id="cuerpo">
      <div class="page-header">
      	
        <div id="fondo-header">
       		
       			<!-- <h1 id="titulo">Prysma garitas</h1> -->
       			<img id="titulo" src="img/logo.png"></img>
       			<div id="botones">
          <ul class="tabs clearfix">
              <li><a href="#tab1" class="round-corners0" >San Ysidro</a></li>
              <li><a href="#tab2" class="round-corners1" >Otay</a></li>
              <li><a href="#tab3" class="round-corners2" >Tecate</a></li>
          </ul>
        </div>

       		
       	</div>
      </div>
                <!-- espacio para publicidad -->
        <div class="publicidad">
          <img src="img/publicidad.png" alt="" class="adjust_img"> </img>
        </div>
        
        <div id="color_boxes" > 
        <article id="tab1" class="tab_content">
		<div id="square_standard0">
	    	<div class="otra">
	    	<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">STANDARD</td>
	                <td id="timerysidro0" class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>
	    	</div>
	  	</div>
	  		<div id="square_sentri0">
	    	<div class="otra">
	    		<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">SENTRI</td>
	                <td id="timerysidro1" class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>
	    	</div>
	  	</div>
	  	<div id="square_readyline0">
	    	<div class="otra">
	    		<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">READY LINE</td>
	                <td id="timerysidro2"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>

	    	</div>
	  	</div>

		</article>

		<article id="tab2" class="tab_content">
			<div id="square_standard1">
	    	<div class="otra">
	    	<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">STANDARD</td>
	                <td id="timerotay0"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>
	    	</div>
	  	</div>
	  		<div id="square_sentri1">
	    	<div class="otra">
	    		<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">SENTRI</td>
	                <td id="timerotay1" class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>

	    	</div>
	  	</div>
	  	<div id="square_readyline1">
	    	<div class="otra">
	    		<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">READY LINE</td>
	                <td id="timerotay2"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>

	    	</div>
	  	</div>
		</article>
				<article id="tab3" class="tab_content">
			<div id="square_standard2">
	    	<div class="otra">
	    	<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">STANDARD</td>
	                <td id="timertecate0"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>
	    	</div>
	  		</div>
	  		<div id="square_sentri2">
	    	<div class="otra">
	    	<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">SENTRI</td>
	                <td id="timertecate1"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>

	    	</div>
	  	</div>
	  	<div id="square_readyline2">
	    	<div class="otra">
	    		<table class="table table-hover">
	        <thead>
	        </thead>
	        <tbody>
	            <tr>
	                <td class="titulobox">READY LINE</td>
	                <td id="timertecate2"class="timer"></td>
	            </tr>
	            <tr>
	                <td class="espera">Tiempo de espera</td>
	                <td></td>
	            </tr>
	        </tbody>
    		</table>

	    	</div>
	  	</div>
		</article>         
        </div>
        <div id= "actual_time"> <p>Actualizado hace 8 minutos	</p> 
        </div>

        <div class= "social_div">
          <div class ="row social_buttons">
          	<ul class="tabs2 clearfix">
 				<li >
 					<a href="#tab4" class="round-corners3">
 						<p class="redsocial"> Facebook</p>
 					</a>
 				</li>
 				<li >
 					<a href="#tab5" class="round-corners4">
 						<p class="redsocial"> Twitter</p>
 					</a>
 				</li>
  		    </ul>
          </div>
          <div class ="row">
          	<article id="tab4" class="tab_content2">
          		<iframe 
          			id="tab4"
          			src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmatchblood&amp;width=300&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" 
          			scrolling="no" 
          			frameborder="0" 
          			style="border:none; overflow:hidden; width:300px; height:258px;"allowTransparency="true">
          		</iframe>
          	</article>         
          	<article id="tab5" class="tab_content2">
					<div>
					<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/MatchBlood" data-widget-id="555498584507179008">Tweets por el @MatchBlood.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					</div>
         	</article>         
         		</div>
        	</div>
        
        	<div class="line_footer"></div>
    	</div>

    <footer class="footer">
      <div class="container" id="pie">
        <p class="text-muted"></p>
      </div>
    </footer>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>    
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<!-- tabs -->
<script src="scripts.js"></script>

    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-43313358-1');ga('send','pageview');

      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
      if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
      js.src="https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>

  </body>
</html>
