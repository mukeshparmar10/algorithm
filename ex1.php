<!DOCTYPE html>
<head>
<title>Test Code</title>
</head>
<body>
<?php
	$list1 = array(1,7,3,4);
	$list2 = array();
	
	
	for($i=0;$i<count($list1);$i++)
	{		
		$ans = 1;
		for($j=0;$j<count($list1);$j++)
		{			
			if($j!=$i)
			{
				$ans = $ans * $list1[$j];
			}	
		}
		$list2[$i]=$ans;
	}
		
	foreach($list2 as $l)
	{
		echo $l . "<br>";
	}
?>
</body>
</html>