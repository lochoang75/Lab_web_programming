<?php
$operator = $_POST['operator'];
$first_num = $_POST['FirstNum'];
$seccond_num = $_POST['SeccondNum'];
echo "Result: ";
switch ($operator)
{
case "add":
	$sum = $first_num + $seccond_num;
	echo "$first_num + $seccond_num = $sum";
	break;
case "sub":
	$sub = $first_num - $seccond_num;
	echo "$first_num - $seccond_num = $sub";
	break;
case "mul":
	$mul = $first_num * $seccond_num;
	echo "$first_num * $seccond_num = $mul";
	break;
case "div":
	$div = $first_num / $seccond_num;
	echo "$first_num / $seccond_num = $div";
	break;
case "pow":
	$pow = pow($first_num, $seccond_num);
	echo "$first_num ^ $seccond_num = $pow";
	break;
case "inverse":
	$inv = $seccond_num / $first_num;
	echo "$seccond_num / $first_num = $inv";
	break;
default:
	die("Not handle");
	break;
}
?>
