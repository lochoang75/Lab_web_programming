<?php
$ret_string = "<table border = '1'>";
echo $ret_string;
for ($count = 0; $count < 7; $count++)
{
	// add new row
	$ret_string = "<tr>";
	echo $ret_string;
	for ($cell = 0; $cell < 7; $cell++)
	{
		$mul = ($count + 1) * ($cell + 1);
		$ret_string = "<td> $mul </td>";
		echo $ret_string;
	}
	$ret_string ="</tr>";
	echo $ret_string;
}
$ret_string = "</table>";
echo $ret_string;
?>
