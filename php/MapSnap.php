<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<title>Sir Toylaa Montgomery's Landing page</title>

</head>
<body>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- GOOGLE MAPS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../js/map.js"></script>

<link rel="stylesheet" type="text/css" href="../css/footerStyle.css">
<link rel="stylesheet" type="text/css" href="../css/buttonStyle.css">
<link rel="stylesheet" type="text/css" href="../css/wrapperStyle.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/toggleNav.js"></script>

    
   <!-- site-wrapper  -->
<div id="site-wrapper">
	<div id="site-canvas" >
	  
	  
	  <!-- Navbar contents  -->
	   <?php
			 include '../html/Header.html';
			 include '../php/toggle-menu.php';
		?>	   
		
<!-- Begginning of page contents  --> 

    <div id="mapContainer" class="container" style = "text-align: center;">
      <div class="row" >
        <h2>Google Maps API, GeoCoding, and Map Controls</h2>
        
      </div>
      
    	<div class = "row center" style="width:100%;">
       	Search ANY Location : <input type="text" size="40" id="address-input" style= "border-radius:5px;">
       	<a class="btn" onclick="searchAddress();">Search</a>
    	</div>
    	
    	
       
    	
    	
      <div class = "row" >
        <div id = "map-canvas">
        	<!-- Empty MAP Container -->
				</div>
			</div>
			
			<div style="text-wrap:none;" class = "container" >
			<div class="row" id="info-box" style="text-align: center; padding: 20px;">
			  
  			  <h4>
  			    <ul>This is a simple implementation of several related Google API's.</ul>
  			      
  			      <li><a href="https://developers.google.com/maps/documentation/" target="_blank">Google Maps API </a></li>
  			      <li><a href="https://developers.google.com/maps/documentation/geocoding/start" target="_blank">Google GeoCoding API</a></li>
              <li><a href="https://developers.google.com/maps/documentation/javascript/" target="_blank">Google Maps JavaScript API</a></li>    			   
  			     </ul> 
  			  </h4>
			  
		  </div>
		</div>
			
			
			
			
			
			
		</div>
<!-- END OF PAGE CONTENTS (Canvas) -->
	  
	  
	  
	</div>
<!-- END OF PAGE (Wrapper)  -->
</div>


  <?php 
    include '../html/Footer.html';
  ?>

		
  <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC20yK-DINQKVKOk-rMGhcboHeMHZ1xw6g&callback=initMap">
  </script>
  
    <script> 
        $(document).keyup(function(e) {
        if (e.keyCode == 13)
        {
             searchAddress();
          
            } 
        });
    </script>
</body>
</html>