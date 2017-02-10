<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ex4</title>
</head>
<body>
<?php
	$hours=12;
	$minutes=30;	
	$minute_angle = 360 * $minutes / 60;
	$hour_angle = 360 * ($hours % 12) / 12 + 360 * ($minutes / 60) * (1 / 12);
	$angle = ($minute_angle - $hour_angle) % 360;
	echo "<br>Hours   : " . $hours;
	echo "<br>Minutes : " . $minutes;
	echo "<br>Angle   : " . $angle
?>
</body>
</html>