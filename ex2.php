<!DOCTYPE html>
<head>
<title>Test Code</title>
</head>
<body>
<?php
	$n1=50;
	$n2=50;
	$ans = $n1;
	for($i=1;$i<=$n2;$i++)
	{
		$ans++;
	}
	echo $ans;
	
	$diff = $n1-$n2;
	echo "<br>";
	while($diff>0)
	{
		echo "N1 is big.";
		break;
	}
	
	while($diff<0)
	{
		echo "N2 is big.";
		break;
	}
	
	while($diff==0)
	{
		echo "Both are same.";
		break;
	}
	
	
	$no=1;
	print_no($no);
	function print_no($n)
	{
		$no=$n;
		if($no<=100)
		{		
			echo "<br>" . $no;
			$no++;
			print_no($no);			
		}
	}
	
?>
</body>
</html>