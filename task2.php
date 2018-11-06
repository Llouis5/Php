<?php
class calculator{
public function sum($x, $y) {
	return $x + $y;
}
public function sub($x,$y) {
return $x - $y;
}
public function mul($x, $y) {
	return $x * $y;
}
public function div($x,$y) {
if ($y==0)
return "error";
return $x / $y;
}
$calculator = new Calculator();
echo $calculator->sum(5, 7);
echo $calculator->subtract(8, 2);
echo $calculator->multiply(2, 5);
echo $calculator->divide(20, 4);
?>
