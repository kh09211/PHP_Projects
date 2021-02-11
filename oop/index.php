<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP Calculator</title>
</head>
<body>
	<form action="includes/calc.inc.php" method="POST">
		<p>My PHP Calculator</p>
		<input type="number" name="num1" placeholder="First Number">
		<select name="oper">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="div">Division</option>
			<option value="mul">Multiplication</option>
		</select>
		<input type="number" name="num2" placeholder="Second Number">
		<button type="submit" name="submit">Calculate</button>
	</form>
</body>
</html>
<!-- 
	
		-->