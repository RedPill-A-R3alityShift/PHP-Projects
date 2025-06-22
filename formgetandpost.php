<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h3>Get Form</h3>
<form action="formprocess.php" method="get">

    Name: <input type="text" name="name"/><br/>
    Email: <input type="text" name="email"/><br/>
    Gender: <input type="radio" name="gender" value="male" /> Male &nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" /> Female<br/>
    Beer Interests: <input type="checkbox" name="beertypecheckbox" value="ales" />Ales &nbsp;&nbsp;<input type="checkbox" name="beertypecheckbox" value="lagers" />Lagers<br/>
    Favorite Beer:
    
 
    <select name="favoritebeer">
    <option value="draak">Gulden Draak</option>
    <option value="stone">Stone Ruination Double IPA</option>
    <option value="smoke">Alaskan Smoked Porter</option>
    <option value="pabst">Pabst</option>
    </select><br/>
    <input type="submit" name="submit"/>
</form>






</body>
</html>