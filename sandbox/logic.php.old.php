<?php
# NEW VARIABLE: How much money is the user trying to save?
$goal = 50;

# Define 4 different variables, which will each represent how much a given coin is worth
$penny_value   = .01;
$nickle_value  = .05;
$dime_value    = .10; 
$quarter_value = .25;

# Define 4 more variables, which will each represent how many of each coin is in the bank
$pennies  = 100;
$nickles  = 25;
$dimes    = 100;
$quarters = 34;

# Add up how much money is in the piggy bank
$total = ($pennies * $penny_value) + ($nickles * $nickle_value) + ($dimes * $dime_value) + ($quarters * $quarter_value);

# See how close they are to the goal
if($total < 30) {
	 $image = 'php-goal-not-met.png';
}
# Check it out! This AND keyword means *both* statements have to be true in order for this condition to be met...
elseif($total >= 30 AND $total < 50) {
	 $image = 'php-goal-almost-met.png';
}
else {
	 $image = 'php-goal-met.png';
}