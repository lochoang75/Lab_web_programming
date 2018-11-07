<?php
/* for loop */
echo "For loop";
echo "<br/>";
for ($count = 0; $count < 100; $count++)
{
	if ($count % 2)
	{
		echo "$count ";
	}
}

/* while loop */
echo "<br/>";
echo "While loop";
echo "<br/>";
$count = 0;
while ($count < 100)
{
	if ($count % 2)
	{
		echo "$count ";
	}
	$count++;
}
?>
