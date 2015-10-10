<?php


$input = file('words.txt');
$char = array("!", "@", "#", "%", "*");
$num = array("1", "2", "3", "4", "5", "6", "7", "8", "9");
$spec_postion = array("0", "1", "2", "3");



$b = $char[array_rand($char)];
$c = $num[array_rand($num)];
$d = $spec_postion[array_rand($spec_postion)];



//echo $input[array_rand($input)];
//$word = $input[array_rand($input)];
$a ="";
$word = array();
?>



<?php

/* if statement to determine #of words. default is 4******************************/

if (!empty($_POST["depth"]))

{
	$x=$_POST['depth'];
}


else

{

$x = 4;

}




// for loop to generate random words

for ($i = 0; $i < $x; $i++){

 $a = $input[array_rand($input)];
 $word[] = $a;
 
}


if (isset($_POST["special"]))

{
	
	
	
    $word[$]=$b.$word[$d];
 
}

?>



<?php

if (isset($_POST["number"]))

{
	
	
	
    $word[$d]=$c.$word[$d];
	
}





?>

