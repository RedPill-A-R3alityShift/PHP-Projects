<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
</head>
<body>
 
	<?php
	echo "Months of the year <br>";
	$selectmonth = 2;
	$selectdate = 13;
	$selectyear = 1986;
	$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	
	$daysinMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30,31, 30,31);
	$years = array(1984, 1985, 1986, 1987, 1988, 1989, 1990, 1991, 1992, 1993, 1994, 1995);
	
	
	
	for($x=0; $x<=11; $x++)
	{
	
	echo $months[$x];
	echo "<br>";
	
		if($x == $selectmonth)
		{
		
			echo "<br>I was born on " . $months[$x] ." " . ($daysinMonth[$x]-17).", ". $years[$x]. "<br>";
			
			switch ($x)
			{
			case 0:
				echo "<b><i>Happy New Year!</i></b><br><br>";
				break;
				
			case 1:
				echo "<b><i>Will you be my valentine?</i></b><br><br>";
				break;
				
			case 2:
				echo "<b><i>Happy St. Parick' Day!</i></b><br><br>";
				break;
				
			case 3:
				echo "<b><i>Don't forget to pay your taxes!</i></b><br><br>";
				break;
			
			case 4:
				echo "<b><i>End of the semester!</i></b><br><br>";
				break;
				
			case 5:
				echo "<b><i>Summer's finally here!</i></b><br><br>";
				break;
				
			case 6:
				echo "<b><i>Happy Fourth of July!</i></b><br><br>";
				break;
				
			case 7:
				echo "<b><i>School's Back!</i></b><br><br>";
				break;
				
			case 8:
				echo "<b><i>Happy Labor Day!</i></b><br><br>";
				break;
				
			case 9:
				echo "<b><i>Happy Halloween!</i></b><br><br>";
				break;
				
			case 10:
				echo "<b><i>Happy Thanksgiving!</i></b><br><br>";
				break;
				
			case 11:
				echo "<b><i>Merry Christmas!</i></b><br><br>";
				break;
				
			default:
				echo "<br>Please enter a valid month<br>";
				
			}
	
		}
		
	}
	

	
	?>
		
        
</body>
</html>
