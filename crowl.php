<?php
	header("Access-Control-Allow-Origin: *");
	include_once('simple_html.php');
	$html = file_get_html("http://estorepower.com/");
	
	echo $html;
	
	$data=array();
	
	if($html->find('title',0))
	{
		$title = $html->find('title');
		foreach($title as $t)
		{
			$data[] = $t;
		}
	}
	
	if($html->find('a'))
	{
		$aa = $html->find('a');
		foreach($aa as $a)
		{
			$data[] = $a->href;
		}
	}
	
	if($html->find('meta[name=description]',0))
	{
		$a = $html->find('meta[name=description]',0);		
		$data[] = $a->content;
	}
	
	if($html->find('meta[name=keywords]',0))
	{
		$a = $html->find('meta[name=keywords]',0);		
		$data[] = $a->content;
	}
	
	foreach($data as $d)
	{	
		echo $d . "<hr>";
	}
?>