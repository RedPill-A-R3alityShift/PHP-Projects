<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Player Process PHP</title>
</head>

<body>
<?php
 
    $fName = $_GET['fname'];
	$lName = $_GET['lname'];
    $teamName = $_GET['tname'];
    $teamside = $_GET['team'];
    $pPosition = $_GET['pPosition'];
    
	  echo 	   "First Name: $fName<br/>
			  	Last Name: $lName<br/>
				Team Name: $teamName<br/>
				Offense/Defense: $teamside<br/>
				Position: $pPosition<br/>
				";
    
   
?>

</body>
</html>