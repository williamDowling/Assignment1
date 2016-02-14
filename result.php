<?php

//define form variables
$nameTxt = $_REQUEST["nameTxt"];
$addressTxt = $_REQUEST["addressTxt"];
$cityTxt = $_REQUEST["cityTxt"];
$stateTxt = $_REQUEST["stateTxt"];

//conditionally set variable based on whether or not checkbox was checked
if(isset($_REQUEST["prefCheckBox"])){
	$prefCheckBox = "you definitely wanted to check that box!";
}
else{
	$prefCheckBox = "you did NOT want to check that box... =(";
}

?>


<html>
	<body>
		<!--display variables with html -->
		<h1>Hello <?php echo $nameTxt ?>!</h1>
		<p>Our records show you live at <?php echo $addressTxt . ", " . $cityTxt . " " . $stateTxt?> </p>
		<br/>
		<p>We also determined <?php echo $prefCheckBox ?></p>
	</body>
</html>