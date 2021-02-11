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
	<title>Javascript Calculator</title>
</head>
<body>
	<form action="#" method="">
		<p>My Javascript Calculator</p>
		<span><p>Result: </p><p id="result">0</p></span>
		<button id="7" value="7">7</button>
		<button id="8" value="8">8</button>
		<button id="9" value="9">9</button>
		<button id="plus" value="plus">+</button>
		<br>
		<button id="4" value="4">4</button>
		<button id="5" value="5">5</button>
		<button id="6" value="6">6</button>
		<button id="minus" value="minus">-</button>
		<br>
		<button id="1" value="1">1</button>
		<button id="2" value="2">2</button>
		<button id="3" value="3">3</button>
		<button id="mult" value="4">X</button>
		<br>
		<button id="0" value="0">0</button>
		<button id="point" value="point">.</button>
		<button id="equal" value="equal">=</button>
		<button id="clear" value="clear">C</button>
	</form>
</body>
</html>
<!-- 
	