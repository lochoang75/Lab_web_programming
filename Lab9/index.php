<?php
// Validate data
function validate_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// Connect to db
function connect_db ($servername, $username, $password, $dbname, $conn)
{
	//Check connection
	if ($conn) {
		die("Connection failed:". mysqli_connect_error());
	}
}



// Insert data to db
function insert_mysql ($id, $name, $year)
{
	global $servername, $username, $dbname, $password;
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "";
	if (($name != NULL) && ($year != NULL))
	{
		$sql = "INSERT INTO cars (id,name, year) VALUES ($id,'$name', $year)";
	}
	if ($sql == "")
	{
		die ("Wrong input");
	}
	if (mysqli_query($conn, $sql)) 
	{
		echo "Add new record to cars success";
	}
	else
	{
		die ("Error: ". mysqli_error($conn));
	}
	mysqli_close($conn);
}

// Modify data in table
function modify_mysql($id, $name, $year)
{	
	global $servername, $username, $dbname, $password;
	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	$sql = "";
	if ($name != NULL && $year != NULL)
	{
		$sql = "UPDATE cars SET name='$name',year=$year WHERE id=$id";
	}
	else if ($name != NULL)
	{
		$sql = "UPDATE cars SET name='$name' WHERE id=$id";
	}
	else if ($year != NULL)
	{
		$sql = "UPDATE cars SET year=$year WHERE id=$id";
	}

	if (mysqli_query($conn, $sql)) 
	{
		echo "Modify data success";
	}
	else
	{
		die ("Error: ". mysqli_error($conn));
	}
	mysqli_close($conn);
}

// Delete data in table
function delete_mysql($id)
{
	global $servername, $username, $dbname, $password;
	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	$sql = "DELETE FROM cars WHERE id=$id";
	if (mysqli_query($conn, $sql)) 
	{
		echo "Delete success";
	}
	else
	{
		die ("Error: ". mysqli_error($conn));
	}
	mysqli_close($conn);
}
// data from POST
if (isset($_POST['name']))
{
	$name = validate_input($_POST['name']);
	$name = (strlen($name) > 5 && strlen($name) < 40)?$name: NULL;
}

if (isset($_POST['year']))
{
	$year = validate_input($_POST['year']);
	$year = filter_var($year, FILTER_VALIDATE_INT);
	$year = ($year > 1990 && $year < 2015)? $year: NULL;

}

if (isset($_POST['id']))
{
	$id = validate_input($_POST['id']);
	$id = filter_var($id, FILTER_VALIDATE_INT);
}

$action = validate_input($_POST['action']);

// server info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "examples";

switch ($action)
{
case "insert":
	insert_mysql($id,$name,$year);
	break;
case "modify":
	modify_mysql($id, $name, $year);
	break;
case "delete":
	delete_mysql($id);
	break;
default:
	die("Not a action");
	break;
}
include "input.html";

?>
