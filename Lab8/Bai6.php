<?php
	/* Declare variable */
	$first_name = $_POST['First_name'];
	$last_name = $_POST['Last_name'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$about = $_POST['about'];
	$success = 0;

	/* Check each field for error */
	if (strlen($first_name) > 30 || strlen($first_name) < 2)
	{
		echo "First name length must from 2 - 30 character";
	}
	else 
	{
		$success++;
	}

	if (strlen($last_name) > 30 || strlen($last_name) < 2)
	{
		echo "Last name length must from 2 - 30 character";
	}
	else 
	{
		$success++;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
		echo "$email not a email format";
	}else 
	{
		$success++;
	}

	if (strlen($password) > 30 || strlen($password) < 2)
	{
		echo "password length must from 2 - 30 character"; 
	} else 
	{
		$success++;
	}

	if ($day == 29 && $month ==2)
	{
		if (($year % 400) != 0 || (($year % 4) != 0))
		{
			echo "$year not a leave year";
		}
	}

	$month_in_year = array(31,28,31,30,31,30,31,31,30,31,30,31);
	if ($month_in_year[$month] < $day)
	{
		echo "$month not has $day days";
	} else 
	{
		$success++;
	}

	if (strlen($about) > 1000)
	{
		echo "Please just write some main infomation about you in 1000 words";
	} else 
	{
		$success++;
	}
	if ($success == 6)
	{
		echo "Complete";
	}
?>
