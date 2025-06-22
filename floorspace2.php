<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<title></title>
			<link rel="stylesheet" href="style.css" />
			<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
		<h1>Test</h1>
 <?php
 $length = 20;
 $width = 30;
 $area = $length * $width;
 
 echo "<b>The floor space is ". $area . " square feet</b>\n";
 
 
 switch ($area)
{
case $area > 400:
	echo "<br> That's a big room!";
	break;
	
case $area < 400:
	echo "<br>That's an average size room";
	break;
	
default:
	echo "<br> An error happened.";
	
}

 
 ?>
 
 
		</body>
	</html>