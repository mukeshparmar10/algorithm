<!DOCTYPE html>
<head>
<title>Test Code</title>
</head>
<body>
<?php
	$str = "civic";
	$str1="";
	for($i=strlen($str)-1;$i>=0;$i--)
	{
		$str1 .= substr($str,$i,1);
	}
	
	if($str == $str1)
	{
		echo "Yes palindrom...";	
	}
	else
	{
		echo "Not palindrom...";	
	}
?>
</body>
</html>