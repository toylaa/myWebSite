<?php
  function test()
  {
	  return 'test';
  }
  function news_all($level)
  {
    $icntr      = 0;
    $result     = '';
	$newsdir    = './news/';
//	$newslist   = scandir($newsdir,1);
	if(($level == 'mini') || ($level == 'full'))
	{
		$newslist = scandir($newsdir,1);
	}
	else
	{
		$newslist   = array($_REQUEST['item']);
	}

	
	foreach($newslist as $newsitem)
	{
		$source = explode(PHP_EOL,file_get_contents($newsdir . $newsitem));
		$pmax   = count($source) - 1;
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
			$result .= '<p class="newsheadline"><a href="https://www.sunrisecreditservices.com/company-news.php?item=' . $newsitem . '">' . $source[++$posit] . '</a></p>' . PHP_EOL;
			while($source[++$posit] != '<!-- full -->')
			{
				$result .= '<p style="font-size:11px;">' . $source[$posit] . '</p>';
			}
			$result .= '</td>';
		}
		$posit = array_search('<!-- full -->',$source,false);
		if(($level != 'mini') && ($posit !== false))
		{
			$result .= '<td style="valign:top;width:90%;">' . PHP_EOL;
			$result .= '<p class="newsheadline">' . $source[++$posit] . '</p>' . PHP_EOL;
			while($source[++$posit] != '<!-- done -->')
			{
				$result .= '<p style="font-size:11px;">' . $source[$posit] .  '</p>' . PHP_EOL;
			}
			$result .= '</td>';
		}
		$result >= '</tr>' . PHP_EOL;
			if(($level != 'full') && ($level != 'mini'))
			{
				echo '<tr><td colspan="2" style="text-align:right;"><a href="/company-news.php">Read All the News</a>&nbsp;<hr/></td></tr>';
			}
	}
	$result .= '<tr><td colspan="2"><hr/></td></tr>';
	return $result;
  }
?>