<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sir Toylaa Montgomery's Landing page</title>

</head>
<body>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="css/footerStyle.css">
<link rel="stylesheet" type="text/css" href="css/buttonStyle.css">
<link rel="stylesheet" type="text/css" href="css/wrapperStyle.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/toggleNav.js"></script>
   <!-- site-wrapper  -->
<div id="site-wrapper">
	<div id="site-canvas" >
	  <!-- Navbar contents  -->
	  <?php
			 include 'html/Header.html';
			 include 'php/toggle-menu.php';
		?>
<!-- Begginning of page contents  --> 
        <div class="container">
          <div class="jumbotron" style="display:block; margin:auto;">
            <div style="display:center;">
                <h1>Welcome.</h1> 
                <p>This is my website.</p> 
            </div>
          </div>
          <p>Take a moment.</p> 
          <p>To figure out what to put here.</p> 
        </div>

	</div>
	
</div>
   <?php
			 include 'html/Footer.html';
	 ?>
</body>
</html>