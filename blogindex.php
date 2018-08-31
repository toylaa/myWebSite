<!DOCTYPE html>
<html>
<?php include './php/news_func.php'; ?>
<head>

	<script   src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

	<title>Test Index</title>

	<script>
		function GetBlog(item) {
			//alert('gETbLOG');
		    if (item.length == 0) {
		       // document.getElementById("txtHint").innerHTML = "";
		        return;
		    } else {
		    		alert("Ajax Attempted: "+ item);

		    	/**/
		    	$.ajax({ url: 'http://localhost/php/news_func.php',
				         data: {BlogItem: item},
				         type: 'GET',
				         success: function(result) {
				         	alert('ajax SUCCESS!<br>Response: ' + result);

				                      document.getElementById('BlogSpot').innerHTML = result;
				                  }
				});
				

				/* Example 1 
				$.ajax('./php/test.php', {
				  success: function(response) {
				    alert('Success!');
				  }
				});*/


				//alert('Ajax passed');
		       
		    }
		}
	</script>

</head>
<body>
	<!--?php include('./php/blogengine.php'); 



	PreviewBlog('/blog/blog1.txt');

	?-->




	<div id="newsfeed_home" style="width:100%;max-height:370px;">
		<table style="border:0px; cellpadding:0px; cellspacing:0px; width:100%;">
		<?php
		  //include './php/news_func.php';
		  $news = news_all('mini');
		   echo $news;
		?>
		</table>
	</div>


	<div class="container" id="BlogSpot" style='min-height:50px;border:2px solid black;'>
		<h2>BlogSpot</h2>

	</div>

</body>
</html>