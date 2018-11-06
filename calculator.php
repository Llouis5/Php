<html>
<head>
</head>
<body style = "text-align:center; font-size: 50px;">	
<?php

class Calculator{
public function sum($x, $y) {
	return $x + $y;
}
public function sub($x, $y) {
	return $x - $y;
}
public function mul($x, $y) {
	return $x * $y;
}

public function div($x, $y) {
	if($y==0)
	return "error";
	return $x / $y;
}
}
if(!isset($_GET["op"]) || !isset($_GET["x"]) || !isset($_GET["y"])){
	echo "Incorrect or incomplete data";
	exit();
	}
$calculator = new Calculator();
$op = $_GET["op"];
$x = $_GET["x"];
$y = $_GET["y"];

switch($op){
	case "sum":
	$result=$calculator->sum($x, $y);
	echo "<h1>$x + $y = $result</h1>";
	break;
	case "subtract":
	$result=$calculator->sub($x, $y);
	echo "<h1>$x - $y = $result</h1>";
	break;
	case "multiply": 
	$result=$calculator->mul($x, $y);
	echo "<h1>$x * $y = $result</h1>";
	break;
	case "divide":
	$result=$calculator->div($x,$y);
	echo"<h1>$x \ $y = $result</h1>";
	break;
	default:
	$op=$_GET["op"];
	echo "<h1>Unrecognized operation $op</h1>";
}
?>
</body>
</html>
