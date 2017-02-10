<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex4</title>
</head>
<body>
<?php
	$no=array();
	$no[]=array(1,2,3,4);
	$no[]=array(5,6,7,8);
	$no[]=array(9,10,11,12);
	
	foreach($no as $n)
	{
		foreach($n as $i)
		{
			echo $i . "&nbsp;";	
		}
		echo "<br>";
	}
	$tmp=0;
	for($i=(count($no)-1),$j=0;$i>=0;$i--,$j=0)
	{
		echo $no[$i][$j] . "&nbsp";
		$tmp=$i;
		while($i+1 < count($no) && $j+1 < count($no[0]))
		{
			echo $no[$i+1][$j+1] . "&nbsp;";
			$i++;$j++;
		}
		$i = $tmp;
		echo "<br>";
		if($i == 0)
		{
			for ($k = 1; $k < count($no[0]); $k++)
			{
				$tmp = $k;
				echo $no[$i][$k] + "&nbsp;";
				while ($i + 1 < count($no) && $k + 1 < count($no[0]))
				{
					echo $no[$i + 1][$k + 1] . "&nbsp;";
					$i++;
					$k++;
				}
				$k = $tmp;
				$i = 0;
				echo "<br>";
			}
		}
	}
?>
</body>
</html>