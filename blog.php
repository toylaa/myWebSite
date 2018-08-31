<?php 
  $dir = 'posts';
  $dirfiles = scandir($dir);

// echo "$files1: " . var_dump($files1);
  
  $str = '';
  $cnt = 0;
  $files = array(); 
  $fileNames = array();

  foreach ($dirfiles as $key => $value)
   {
      switch ($value) 
      {
        case ".":
         // echo '1-omit';
          break;
        case "..":
         // echo '2-omit';
          break;
        default:
          
          $files[$cnt] = $value;
          

          $fileNames[$cnt] = explode(".", $value)[0];


          $cnt = $cnt + 1;
          break;
      }     
   
   }
  
 ?>

<!doctype html>
<!-- -->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

<title>Blog - Toylaa.com </title>

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
<script type="text/javascript" src="../js/toggleNav.js"></script>

<style type="text/css">
  
  .blog_post {
    height:auto; 
    padding-bottom:4%;
    margin-bottom:8%;
    width:100%;
     background: black; 
    border-style: solid;
    border-radius: 5px;
    border-color: black;
    cursor: pointer;
     box-shadow: 0 7px #999;
     transition:.5s;
  }
  .blog_post:hover {
    color: black;
    transition:.5s;
    background-color: white;
  }
  .blog_post:hover > h4 , .blog_post:hover > hr  {
    display:none;
  }


.blog_post:active {
  color: white;
  background-color: black;
  box-shadow: 0 3px #666;
  /*box-shadow: 0 5px #666;*/
  transform: translateY(4px);
}




</style>
    
    
  <!-- site-wrapper  -->
<div id="site-wrapper">
  <div id="site-canvas" >
    
    
     <?php
       include 'html/Header.html';
       //include 'php/toggle-menu.php';       
    ?>
    
    
<!-- Begginning of page contents  --> 
        
        
      <div class="container">

        <div class="jumbotron" style="margin:auto;">        
          <img src="/img/blogdef.jpg" style="width:100%;">
         </div>

           <br>
           <br>
          <!--table>
           <tr>
             <td></td>
             <td></td>
           </tr> 

          </table-->

          <div style="display:inline;  width:48%; max-width:50%; float:left;">
           <?php 
             //TBD - individual blog entries

           // tbd - use indexed for loop instead.. 
           // - use file indexes to set distinct div_post ID's to be handled by javascript
            foreach ($fileNames as $filename)
            {
              echo '<div >';
              echo '<button class="blog_post">';
              echo '<h4> '. $filename . '</h4>'  ;
              echo '<hr style="background-color:white;">';

              echo '</button>';
              echo '</div>';   
            }


            ?>

          </div>
          
          <div style="display:inline; max-width:50%; float:right; ">

          <div style="text-align:right;">
             <a class="twitter-timeline" data-height="100vw" data-width="100vw" data-theme="light" data-link-color="#9266CC" href="https://twitter.com/toylaa?ref_src=twsrc%5Etfw">Tweets by toylaa</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
          </div>
          
          <div style="text-align: center;">
            <a class="twitter-follow-button"
            href="https://twitter.com/Toylaa"
            data-show-count="false"
            data-size="large">
          Follow me @Toylaa</a>
          </div>
         </div>    
  </div> <!-- End of "container" -->
  
  
  
</div>

<?php
   include 'html/Footer.html';
?>
   
</body>
</html>