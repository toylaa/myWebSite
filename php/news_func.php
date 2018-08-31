<?php
	//include('./index.php');
	//echo 'News Func Loaded!';

	if(isset($_REQUEST['BlogItem']) && !empty($_REQUEST['BlogItem'])) {
	    $BlogItem = $_REQUEST['BlogItem'];
	    switch($BlogItem) {
	        case 'test' : test();break;
	        case 'blah' : blah();break;
	        default :
	        	//echo 'Default case Statement Executed! ';
	        	 news_all($BlogItem);break;

	        	//echo file_get_contents('../blog/blog2.txt');

	        // ...etc...
	    }
	}


  function test()
  {
  	$result = 'test';
	  return $result;
  }
  function news_all($level)
  {
    $icntr      = 0;
    $result     = '';    
	//$newsdir    = './blog/';
    //$newslist   = scandir($newsdir,1);
	if(($level == 'mini') || ($level == 'full'))
	{
		$newsdir    = './blog/';
		$newslist = scandir($newsdir,1);
		//var_dump($newslist);
		//echo file_get_contents($newsdir . 'blog1.tst');
	}
	else
	{
		$newsdir    = '../blog/';
		$newslist = $level;
		//var_dump($newslist);
	}

	
	foreach((array)$newslist as $newsitem)
	{
		//echo '<br>$newsitem: '.  $newsitem ;

		if ($newsitem == '.' || $newsitem == '..' ) 
		{
			//skip /. & /.. 
	        continue;
	    }

		//echo '<br>-->: '. $newsdir . $newsitem ;
		//echo 'contents: ' . file_get_contents($newsdir . $newsitem) .'<br>';

		//$source = explode(PHP_EOL,file_get_contents($newsdir . $newsitem));
		 $sourceraw = file_get_contents($newsdir . $newsitem);
		// echo $sourceraw;
		 $source = explode (PHP_EOL, $sourceraw);
		 //echo '<br>$source[0]' . $source[0] . '<br>';
		 // echo '<br>$source[1]' . $source[1] ;
		  // echo '<br>$source[2]' . $source[2] . '<br>';
		  //  echo '$source[3]' . $source[3] . '<br>';

		$pmax   = count($source) - 1;
		//echo '$pmax: '. $pmax;
		//
		$icntr++;
		$posit = array_search('<!-- date -->',$source,false);		
		if($posit !== false)
		{
			if($icntr > 2)
			{
				$result .= '<tr><td colspan="2"><hr/></td></tr><tr>' . PHP_EOL;
			} else {
				$result .= '<tr>';
			}
				$result .= '<td style="valign:top;" class="newsfeeddate">' . $source[$posit+1] . '</td>' . PHP_EOL;
			} else {
			$result .= PHP_EOL;
		}
		//	
		$posit = array_search('<!-- mini -->',$source,false);
		if(($level == 'mini') && ($posit !== false))
		{
			$result .= '<td style="valign:top;width:80%;">' . PHP_EOL;
			//$result .= '<p class="newsheadline"><a href="https://www.sunrisecreditservices.com/company-news.php?item=' . $newsitem . '">' . $source[++$posit] . '</a></p>' . PHP_EOL;

			$result .= '<p class="newsheadline"><a href="#" onclick="GetBlog(\''. $newsitem .'\'); " > '. $source[++$posit] . '</a></p>' . PHP_EOL;

			while($source[++$posit] != '<!-- full -->')
			{
				$result .= '<p style="font-size:11px;">' . $source[$posit] . '</p>';
			}
			$result .= '</td>';
		}
		$posit = array_search('<!-- full -->',$source,false);
		if(($level != 'mini') && ($posit !== false))
		{
			//echo '$level: '.$level;
			//echo '$posit: '.$posit;

			$result .= '<td style="valign:top;width:90%;">' . PHP_EOL;
			$result .= '<p class="newsheadline">' . $source[++$posit] . '</p>' . PHP_EOL;
			while($source[++$posit] != '<!-- done -->')
			{
				$result .= '<p style="font-size:11px;">' . $source[$posit] .  '</p>' . PHP_EOL;
			}

			$result .= '</td>';
			//Print Contents to screen for FULL articles. Only can RETURN for mINI's?.
			
		}
		$result >= '</tr>' . PHP_EOL;
			if(($level != 'full') && ($level != 'mini'))
			{
				echo $result;

				// TBD - Footer Link
				//
				//echo '<tr><td colspan="2" style="text-align:right;"><a href="/company-news.php">Read All the News</a>&nbsp;<hr/></td></tr>';
			}
	}
	$result .= '<tr><td colspan="2"><hr/></td></tr>';
	return $result;
  }
?>