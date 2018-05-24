<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<title>Sprite Fight</title>

</head>
<body>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="../css/footerStyle.css">
<link rel="stylesheet" type="text/css" href="../css/buttonStyle.css">
<link rel="stylesheet" type="text/css" href="../css/wrapperStyle.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Javascript to animate off-canvas site menu --> 
<!--script type="text/javascript" src="../js/toggleNav.js"></script-->

<script type="text/javascript" src="../js/coinSprite.js"></script>

<!-- site-wrapper  -->
<div id="site-wrapper">
	<div id="site-canvas" >
	  
	  <!-- Navbar contents  -->
	  <!-- HTML include Header.html -->
	   <?php
			 include '../html/Header.html';
			 //include '../php/toggle-menu.php';
		?>
<!-- Beginning of visible page contents  --> 
<div  id="replace-text" style="text-align: center;">  replace-text </div>

	<canvas id="coinAnimation"></canvas>
	
	<!--this is inside the wrapper-->
</div><!--END of page canvas --> 
<?php
	 include '../html/Footer.html';
?>

</body>
</html>