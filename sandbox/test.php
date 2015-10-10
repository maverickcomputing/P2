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
  

 
  <h2>Test</h2>
  
<p>

<form action="test.php" method="post">
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
<?php
if (isset($_POST['special'])){



echo $_POST['special']; // Displays value of checked checkbox.
}

elseif (isset($POST['number'])){

echo $_POST['number'];

}

?>




<?php


$char = array("!", "@", "#", "%", "*");
$num = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
$input = file('words.txt');

$rand_keys = array_rand($input, 5);
$rand_keys = array_rand($num, 1);
$rand_keys = array_rand($char, 1);

echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";
echo $input[$rand_keys[3]] . "\n";
echo $input[$rand_keys[4]] . "\n";


$rand_keys = array_rand($char, 2);
echo $char[$rand_keys[1]] . "\n";

$rand_keys = array_rand($num, 2);
echo $num[$rand_keys[1]] . "\n";

?>


<?php
$char = array("!", "@", "#", "%", "*");
$num = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
$input = file('words.txt');

$rand_keys = array_rand($input, 5);
$rand_keys = array_rand($num, 1);
$rand_keys = array_rand($char, 1);





if (isset($_POST['special']) && isset($_POST['num']))
 {
	echo $num[$rand_keys[1]] . $input[$rand_keys[1]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[2]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[3]] . $char[$rand_keys[1]] . "\n";
	echo $num[$rand_keys[1]] . $input[$rand_keys[4]] . $char[$rand_keys[1]] . "\n";
	
} elseif (isset($_POST['num']))
 
{
	echo $input[$rand_keys[1]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[2]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[3]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[4]] . $num[$rand_keys[1]] . "\n";
}
	
  elseif (isset($_POST['num'])) 
{
	echo $input[$rand_keys[1]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[2]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[3]] . $num[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[4]] . $num[$rand_keys[1]] . "\n";

} else {
	
	echo $input[$rand_keys[1]] . "\n";
	echo $input[$rand_keys[2]] . "\n";
	echo $input[$rand_keys[3]] . "\n";
	echo $input[$rand_keys[4]] . "\n";
}
?>



// $word=file('words.txt');

//echo count($word).'<br>';
//foreach($word as $word)
//{
//	echo $word.'<br>';
//}










?>


</p>
</div>
</body>
</html>