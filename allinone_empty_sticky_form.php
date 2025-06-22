<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

 
    function displayForm($x,$y)
        {
        ?>
            <form action="allinone_empty_sticky.php" method="get">
            Name: <input type="text" name="name" value="<?php echo $x;?>" /><br/>
            Email: <input type="text" name="email" value="<?php echo $y;?>" /><br/>
            <input type="submit" name="submit"/>
            </form>
        <?php
        }
 
    if(isset($_GET['submit']))
    {
        
		$theName = $_GET['name'];
        $theEmail = $_GET['email'];
        if($theName=="" || $theEmail=="")
        {
            echo "You didn't one of the form elements out!";
            displayForm($theName, $theEmail);
        }
        else
        {
            echo "Thanks $theName for filling out the form!  You're email is $theEmail";
        }
    }
    else
    {
		$theName = null;
		$theEmail = null;
	
           displayForm($theName, $theEmail);
    }
 
?>
<!--displayForm("Please enter your name", "Please enter your email") -->



</body>
</html>