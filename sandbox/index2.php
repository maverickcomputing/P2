                             <!DOCTYPE html>
<html>
<head>
  <title> ~ Henry Perkins P2 ~ </title>
  <link href="site.css" rel="stylesheet">
<?php
	require('logic.php');
?>
</head>
<body>

<div id="main">
  <h1>Henry Perkins Project 2</h1>
  <h1>xkcd Password Generator</h1>
  

  
  <h2>Project 2</h2>


<p>

<form action="index2.php" method="post">
How many words
<input type="textbox" name="depth" value="<?php if(isset($_POST['depth'])) echo $_POST['depth']; ?>" ></input>
<br>
<br>
Add a Random Character
<input type="checkbox" name="special" value="<?php if(isset($_POST['special'])?'checked="checked"':''); ?>" ></input>
<br>
<br>
Add a number
<input type="checkbox" name="number" value="<?php if(isset($_POST['number'])?'checked="checked"':''); ?>" ></input>
<br>
<br>
<input type="submit" name="submit" value="Generate New Password"/>
</form>
<br>
<br>

<div id="4b" style="background-color: gray; color: #FFFFFF; padding-left: 5px; padding-right: 5px; padding-top: 5px; padding-bottom: 5px; font-family: verdana;
    font-size: 24px;
">










<?php 

  
  	foreach($word as $value) { 
	echo "$value ";
} 
?>

</div>
</p>
</div>
</body>
</html>