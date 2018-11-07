<?php
$value = rand(10, 100);
switch ($value % 5)
{
case 0:
	echo "Hello";
	break;
case 1:
	echo "How are you ?";
	break;
case 2:
	echo "I'm doing well, thank you";
	break;
case 3:
	echo "See you later";
	break;
case 4:
	echo "Good-bye";
	break;
default:
	die("Not handle");
	break;
}

?>
