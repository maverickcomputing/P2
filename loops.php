<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<p>
<?php

$x = 5;
$input = file('words.txt');

//echo $input[array_rand($input)];
//$word = $input[array_rand($input)];
$a ="";
$word = array();
//$random_passwords = array();

for ($i = 0; $i < $x; $i++){

 $a = $input[array_rand($input)];
 
 array_push($word, "$a");
 
 print_r($a);

}

?>



</p>
</body>
</html>