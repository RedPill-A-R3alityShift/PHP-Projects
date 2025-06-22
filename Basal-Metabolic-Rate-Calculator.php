<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Calculate your calorie needs</title>
</head>

<body bgcolor="#F6F6F6">

<?php
	function text($string){
		
			
			switch($string){
				
			case "ACT1":
			$string = "Sedentary-Little or No Exercise";
			return $string;
		
			case "ACT2":
			$string = "Lightly Active-Light Exercise 1-3 days/wk";
			return $string;
			
			case "ACT3":
			$string = "Moderately Active-Moderate Exercise 3-5 days/wk";
			return $string;
			
			case "ACT4":
			$string = "Very Active-Hard Exercise 6-7 days/wk";
			return $string;
			
			case "ACT5":
			$string = "Extra Active-Very Hard Exercise";
			return $string;
			
			}
	
	
		
	}


	function calcBMR($F,$Num)
	{
		switch($F){
			
			case "ACT1":
			$Num = $Num * 1.2;
			
			return $Num;
		
			
			case "ACT2":
			$Num = $Num * 1.375;
			return $Num;
			
			case "ACT3":
			$Num = $Num * 1.55;
			return $Num;
			
			case "ACT4":
			$Num = $Num * 1.725;
			return $Num;
			
			case "ACT5":
			$Num = $Num * 1.9;
			return $Num;
			
		
			
		}
		
		
	}



 
    function displayForm($x,$y,$z,$a,$b)
        {
        ?>
<h3>Calculate Your Daily Calorie Need</h3>
<h3>Please fill the form below</h3>
	<form action="Basal-Metabolic-Rate-Calculator.php" method="get">
        
	Gender: <input type="radio" name="G1" value="Male"  <?php if ($a == "Male") echo "checked='checked'"; ?>/> Male &nbsp;&nbsp;&nbsp;<input type="radio" name="G1" value="Female" <?php if ($a == "Female") echo "checked='checked'"; ?> />Female<br/>
        
    Age:<input type="text" name="A1" value="<?php echo $x; ?>"><br/>
	Height (in inches):<input type="text" name="H1" value="<?php echo $y; ?>"><br/>
	Weight (in pounds):<input type="text" name="W1" value="<?php echo $z; ?>"><br/>
    
     Select an Activity Level from the list provided:  
    <select name="Activity1">
    <option value="ACT1" <?php if($b == "ACT1" )echo "selected='selected' " ?>>Sedentary-Little or No Exercise</option>
    <option value="ACT2" <?php if($b == "ACT2" )echo "selected='selected' " ?>>Lightly Active-Light Exercise 1-3 days/wk</option>
    <option value="ACT3" <?php if($b == "ACT3" )echo "selected='selected' " ?>>Moderately Active-Moderate Exercise 3-5 days/wk</option>
    <option value="ACT4" <?php if($b == "ACT4" ) echo "selected='selected' " ?>>Very Active-Hard Exercise 6-7 days/wk</option>
    <option value="ACT5" <?php if($b == "ACT5" ) echo "selected='selected' " ?>>Extra Active-Very Hard Exercise</option>
   
    </select><br/>
    
    
    
 
    
    
    
    
    
    

	<input type="submit" name="submit"/>
	</form>  
      
           
<?php
		}

if(isset($_GET['submit']))
    {
		if(isset($_GET['G1']))
		{
		$gender2 = $_GET['G1'];
        $age2 = $_GET['A1'];
        $height2 = $_GET['H1'];
		$weight2 = $_GET['W1'];
		$activity2 = $_GET['Activity1'];
		}
		else 
		{
		$gender2 = NULL;
		$age2 = $_GET['A1'];
        $height2 = $_GET['H1'];
		$weight2 = $_GET['W1'];
		$activity2 = $_GET['Activity1'];
		}
		
		
        if($age2=="" || $height2=="" || $weight2=="" || $gender2==NULL || $activity2=="")
        {
            echo "You didn't fill the form properly.";
			if(isset($gender2))
			{
			 displayForm($age2,$height2,$weight2, $gender2, $activity2);
			} 
			else
			{
			
			displayForm($age2,$height2,$weight2, $gender2, $activity2);
			}
			
			
        }
        else
        {
			switch($gender2){
				
				case "Female":{
					
					
		
				$BMR2 = 655 + (($weight2/2.2)*9.6)+ (($height2 * 2.54)*1.8) - ($age2 * 4.7 );
							
				
				
           		echo "<h2>Your Recommended Daily Calorie Intake Report</h2>";
				echo "$gender2<br/>";
				echo "Age:$age2<br/>";
				echo "Height: ".floor($height2/12)."'".($height2 % 12) .'"<br/>';
				echo "Weight:$weight2 pounds<br/>";
				echo "Activity level is ".text($activity2)."<br/>";
				echo "Your recommended calorie intake is " . number_format(calcBMR($activity2,$BMR2)) . " calories<br/>";
				
				break;
				}
				
				
				
				case "Male":{
				$BMR2 = 66 + (($weight2/2.2)*13.7)+ (($height2 * 2.54)*5) - ($age2 * 6.8);
				
           		echo "<h2>Your Recommended Daily Calorie Intake Report</h2>";
				echo "$gender2<br/>";
				echo "Age:$age2<br/>";
				echo "Height: ".floor($height2/12)."'".($height2 % 12) .'"<br/>';
				echo "Weight:$weight2 pounds<br/>";
				echo "Activity level is ".text($activity2)."<br/>";
				echo "Your recommended caloriie intake is " . number_format(calcBMR($activity2,$BMR2)) . " calories<br/>";
				
				break;
				}
				
				default:
				echo "<br>There is a critical error within the coding!!";
			}
			
        }
	}
    else
    {
		
		$age2 = NULL;
		$height2 = NULL;
		$weight2 = NULL;
		$gender2 = NULL;
		$activity2="";
		
			
        displayForm($age2,$height2,$weight2,$gender2,$activity2);
    }

?>

</body>
</html>