 <!DOCTYPE html>
<html>
<head>
  <title> ~ Henry Perkins P2 ~ </title>
  <link href="site.css" rel="stylesheet">
</head>
<body>

<div id="main">
  <h1>Henry Perkins Project 2</h1>
  <h1>xkcd Password Generator</h1>
  

  
  <h2>Project 2</h2>


<p><form action="" method="post">
Add Random Character
<input type="checkbox" name="special" value="special"></input>
<br>
<br>
Add a number
<input type="checkbox" name="number" value="number"></input>
<br>
<br>
<input type="submit" name="submit" value="Generate New Password"/>
</form>



</p>
<p>
<?php

$special = $_POST['special'];
$number = $_POST['number'];

$char = array("!", "@", "#", "%", "*");
$num = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
$input = file('words.txt');

$rand_keys = array_rand($input, 5);
$rand_keys = array_rand($num, 1);
$rand_keys = array_rand($char, 1);





if (isset($special) && isset($number))
 {
	echo $num[$rand_keys[1]] . $input[$rand_keys[1]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[2]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[3]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[4]] . $char[$rand_keys[1]] . "\n";
	
} 

else {
	
	echo $input[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[2]] . "\n";
	echo $input[$rand_keys[3]] . "\n";
	echo $input[$rand_keys[4]] . "\n";
}
?>

</div>
</p>

</body>
</html>