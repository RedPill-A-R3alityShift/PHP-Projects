<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Player Form PHP</title>
</head>

<body>

<h3>Get Form</h3>
<form action="playerprocess.php" method="get">

    Player's First Name: <input type="text" name="fname"/><br/>
    Player's Last Name: <input type="text" name="lname"/><br/>
    Player's Team: <input type="text" name="tname"/><br/>
    Offense/Defense: <input type="radio" name="team" value="Offense" /> Offense &nbsp;&nbsp;&nbsp;<input type="radio" name="team" value="Defense" /> Defense<br/>
   
   Select Player Position:  
    <select name="pPosition">
    <option value="Quarterback">Quarterback</option>
    <option value="Running Back">Running Back</option>
    <option value="Receiver">Receiver</option>
    <option value="Offensive Line">Offensive Line</option>
    <option value="Defensive Line">Defensive Line</option>
    <option value="Linebacker">Linebacker</option>
    <option value="Defensive Back">Defensive Back</option>
    </select><br/>
    <input type="submit" name="submit"/>
</form>






</body>
</html>