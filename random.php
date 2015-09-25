<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Random</title>
	
	<?php
	include('logic2.php');
	?>
	
</head>
	
<body>
<p>
<form action="" method="post">
How many words
<input type="textbox" name="depth" value=""></input>
<br>
<br>
Add a Random Character
<input type="checkbox" name="special" value="true"></input>
<br>
<br>
Add a number
<input type="checkbox" name="number" value="true"></input>
<br>
<br>
<input type="submit" name="submit" value="Generate New Password"/>
</form>

</p>	
	
	
	<p>
Your Password is <?php 
$x=""; 
$G = 5;
for($x=0;$x<$G;$x++)
  {
  echo $word[$x];

}


 ?> 

	</p>
	
	

</body>
</html>
