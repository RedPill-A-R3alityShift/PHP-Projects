<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

    $theName = $_GET['name'];
    $theEmail = $_GET['email'];
    $theGender = $_GET['gender'];
    $theBeerType = $_GET['beertypecheckbox'];
    $theFavoriteBeer = $_GET['favoritebeer'];
    
    echo "Your name is: $theName<br/>
          Your email is: $theEmail<br/>
          Gender: $theGender<br/>
          Your enjoy the following beer styles:
          <br/>";
    
    $theBeerType=array("draak","stone","smoke","pabst");
	
	foreach($theBeerType as $x)
    {
        echo "$x<br/>";
    }
 
    echo "Your favorite beer is: $theFavoriteBeer";
?>

</body>
</html>